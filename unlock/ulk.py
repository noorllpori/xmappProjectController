import json
import bpy
import os

mainpath = input("PATH:")
#mainpath = r"D:\Project\20230726YDV10\vd_v001_noorllpori_YDv10\tex\贴花"

file_list = os.listdir(mainpath)
hz = [ 
    "ai",
    "ps",
    "css",
    "php",
    "png",
    "jpg",
    "jpeg"
]
    
data = []

for root, dirs, files in os.walk(mainpath):
    for file_name in files:
        #unlock add here
        filenamew = os.path.join(root, file_name)
        print( filenamew )
        filenamew = filenamew.replace('\\','\\\\')
        bpy.ops.image.open(filepath=filenamew)
        data.append(filenamew)

#bpy.ops.image.open(filepath="D:\\XAMAPP\\htdocs\\web3d\\unity\\in.txt")

bpy.ops.file.pack_all()
        
print( "unpack" )

for root, dirs, files in os.walk(mainpath):
    for file_name in files:
        filenamew = os.path.join(root, file_name)
        print( os.remove( filenamew ) )
        print( "Remove" )

bpy.ops.file.unpack_all(method='WRITE_ORIGINAL')

bpy.ops.wm.quit_blender()