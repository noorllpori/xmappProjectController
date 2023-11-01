import os
import tempfile
import base64
import re


#file_path = r'C:\"Users"\"Administrator"\"Pictures"\"Saved Pictures"\wt'
file_path = r'D:\"Project"\公司LOGO-01 - (1)'
file_mode = "png"
#print(file_path)

new_file_path = re.sub("\"", "", file_path)  + r"." + file_mode
print(new_file_path)
with open(new_file_path, 'rb' ) as file:
    binary_data = file.read()

base64_data = base64.b64encode(binary_data)

#print(base64_data)
#print(binary_data.decode("utf-8"))

new_file_path = re.sub("\s+", "~", file_path)

file = open(r'D:/Project/Logo.png', 'w')
file.write(base64_data.decode("utf-8"))
file.close()

cmd1 = r"echo "+ base64_data.decode("utf-8") +r">"+file_path + r"_de." + file_mode + ""
print(cmd1)

with open("output.bat", "w", encoding="utf-8") as file:
    file.write(cmd1)

print( os.system(cmd1) )
print( os.system("output.bat") )

cmd2 = r"certutil -f -decode "+file_path + r"_de." + file_mode + " "+ file_path + r"_de." + file_mode + ""
print(cmd2)
os.system(cmd2)