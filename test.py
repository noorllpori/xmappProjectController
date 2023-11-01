import os
import tempfile
import base64


file_path = r"D:\Project\20230823P055ebyn\01"
file_mode = "png"
#print(file_path)

with open(file_path + r"." + file_mode, 'rb') as file:
    binary_data = file.read()

base64_data = base64.b64encode(binary_data)
#print(base64_data)

#print(binary_data)
#file_mode = "txt"
os.system(r"echo create>" + file_path + "_decode." + file_mode )

# 要保存的文本数据
data = base64_data

# 将文本数据写入文件
#data = data.decode('base64')
decoded_bytes = base64.b64decode(data)
#decoded_string = decoded_bytes.decode("utf-8")
#print(string_obj)

os.system(r"echo "+ decoded_bytes +r">" + file_path + "_decode." + file_mode)

your_string_variable= 1
try:
    decoded_string = your_string_variable.decode('utf-8')
except UnicodeDecodeError:
    decoded_string = your_string_variable.decode('base-64')