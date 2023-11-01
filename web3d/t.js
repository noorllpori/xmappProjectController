const WebSocket = require('ws');
// 创建一个WebSocket对象
const socket = new WebSocket("ws://10.0.1.111:48200");
 
// 当WebSocket连接成功时触发
socket.onopen = function(event) {
  console.log("WebSocket 连接成功");
  
  // 向服务器发送消息
  socket.send("Hello Server!");
};
 
// 当收到服务器发送的消息时触发
socket.onmessage = function(event) {
  console.log("收到服务器的消息：" + event.data);
};
 
// 当WebSocket连接关闭时触发
socket.onclose = function(event) {
  console.log("WebSocket 连接关闭");
};
 
// 当发生错误时触发
socket.onerror = function(error) {
  console.log("WebSocket 错误：" + error);
};