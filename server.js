var socket  = require( 'socket.io' );
var express = require('express');
var app     = express();
var server  = require('http').createServer(app);
var io      = socket.listen( server );
var port    = process.env.PORT || 3000;

server.listen(port, function () {
  console.log('Server listening at port %d', port);
});


io.on('connection', function (socket) {
  console.log('user baru');

  // socket.on( 'new_count_message', function( data ) {
  //   io.sockets.emit( 'new_count_message', { 
  //   	new_count_message: data.new_count_message

  //   });
  // });

  // socket.on( 'update_count_message', function( data ) {
  //   io.sockets.emit( 'update_count_message', {
  //   	update_count_message: data.update_count_message 
  //   });
  // });
  // socket.on('teman_baru')

  socket.on('kirim',function( data ){
    io.sockets.emit(data.untuk, {
    	
    });
    // console.log(data.untuk);
  });
});
io.on('disconnect',function(){
  console.log('noob');
})
