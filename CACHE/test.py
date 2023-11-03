from flask import Flask, request, jsonify
import subprocess
import threading

app = Flask(__name__)

# 存储线程对象的全局变量
active_thread = None

# 创建一个线程执行CMD命令
def execute_cmd(command):
    global active_thread

    # 使用subprocess执行CMD命令
    process = subprocess.Popen(command, shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True)

    while True:
        output = process.stdout.readline()
        if not output and process.poll() is not None:
            break
        if output:
            # 推送CMD输出给客户端
            yield output

    # 线程执行完毕后，将active_thread置为None
    active_thread = None

# API路由，用于启动线程执行CMD命令
@app.route('/execute_cmd', methods=['POST'])
def start_thread():
    global active_thread

    if active_thread:
        return jsonify({"message": "A thread is already running."}), 400

    data = request.get_json()
    if 'command' not in data:
        return jsonify({"message": "Command parameter is missing."}), 400

    command = data['command']

    # 创建新线程并启动
    active_thread = threading.Thread(target=execute_cmd, args=(command,))
    active_thread.start()

    return jsonify({"message": "Thread started successfully."}), 200

if __name__ == '__main__':
    app.run(debug=True)
