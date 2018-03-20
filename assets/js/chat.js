$(document).ready(function(){
var base_url = $('#BASE_URL').val();
var server_url = $('#SERVER_URL').val();
var token = $('#token').val();
var $messageForm = $('#messageForm');
var sender = 'amarnath';
//console.log(base_url,server_url,token);
var socket = io.connect(server_url,{
    'query':'token='+token
});
socket.on('connect',function(){
    console.log('connected');
});

socket.emit('join',{
    rooms:['testing','testing2']
})

    socket.on('message',function(data){
        console.log(data);

        var messageHTML = `  <!-- 1st user -->
        <div class="container-2">
            <p id="user_id_1">${data.sender}</p>
            <p>${data.message}</p>
            <i class="material-icons time-right">check</i>
            <span class="time-right">11:00</span>
        </div><br>
        `;

        $('#messages').append(messageHTML);


    });

$messageForm.submit(function(e){
    e.preventDefault();
    var message = $('#message').val();

    var data = {
        room:"testing",
        sender: sender,
        message: message
    };

    console.log('Form Submitted');

    socket.emit('newMessage',data); 
});




});