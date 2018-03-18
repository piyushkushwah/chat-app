$(document).ready(function(){
    var SERVER_URL = $('#SERVER_URL').val();
    var token = $('#token').val();

    var $messageForm = $('#messageForm');


    var socket = io.connect('http://localhost:3000');


    socket.on('connect', function () {
        console.log('Connected');
    });

    $messageForm.submit(function(e){
        e.preventDefault();
        console.log('Form Submitted');
        connect_socket(token);
    });

    function connect_socket (token) {
        // var socket = io.connect('http://localhost:3000', {
        //     query: 'token=' + token
        // });

    };
});