import os
import threading
import socket


class MyServer(object):
    def __init__(self):
        # 初始化socket
        self.server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        # 设置服务器IP地址
        host = '127.0.0.1'
        # 设置服务器端口号
        port = 48200
        # 绑定IP地址和端口
        self.server.bind((host, port))
        # 设置最大监听数
        self.server.listen(5)
        # 设置一个字典，用来保存每一个客户端的连接和身份信息
        self.socket_mapping = {}
        # 设置接收的最大字节数
        self.maxSize = 1024

    def run(self):
        while True:
            socket, addr = self.server.accept()
            # 发送信息，提示客户端已成功连接
            socket.send('success!!!'.encode('utf-8'))
            # 将客户端socket等信息存入字典
            self.socket_mapping[socket] = addr
            # 创建线程，负责获取键盘输入并发送给客户端
            #threading.Thread(target=self.send_to_client, args=(socket,)).start()
            # 创建线程，负责接收客户端信息并转发给其他客户端
            #threading.Thread(target=self.recv_from_client, args=(socket,)).start()

            threading.Thread(target=self.runcmd, args=(socket,)).start()

            #recv_info = socket.recv(self.maxSize).decode('utf-8')
            #print('client{} say: '.format(self.socket_mapping[socket]), recv_info)
            #os.system(recv_info)


    def runcmd(self, socket):
        recv_info = socket.recv(self.maxSize).decode('utf-8')
        'client{} say: '.format(self.socket_mapping[socket]), recv_info
        print(os.system(recv_info))


    def send_to_client(self, socket):
        """
        获取键盘输入并发送给客户端
        :param socket:
        :return:
        """
        while True:
            info = input()
            if info == "quit":
                socket.close()
            for socket in self.socket_mapping.keys():
                socket.send(info.encode("utf-8"))

    def recv_from_client(self, socket):
        """
        接收客户端信息并转发给其他客户端
        :param socket:
        :return:
        """
        while True:
            recv_info = socket.recv(self.maxSize).decode('utf-8')
            print('client{} say: '.format(self.socket_mapping[socket]), recv_info)
            for i_socket in self.socket_mapping.keys():
                if i_socket != socket:
                    i_socket.send(recv_info.encode("utf-8"))


my_server = MyServer()
my_server.run()