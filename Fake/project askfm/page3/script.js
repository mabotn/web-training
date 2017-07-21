$(function(){
       //prepare Your data array with img urls
       var dataArray=new Array();
       dataArray[0]="https://media.giphy.com/media/QEEwcJM5SiL2o/giphy.gif";
       dataArray[1]="https://media.giphy.com/media/ymCPW7HqKF1i8/giphy.gif";
       dataArray[2]="https://media.giphy.com/media/B4p4ffN6eowi4/giphy.gif";


       //start with id=0 after 5 seconds
       var thisId=0;

       window.setInterval(function(){
           $('#thisImg').attr('src',dataArray[thisId]);
           thisId++; //increment data array id
           if (thisId==2) thisId=0; //repeat from start
       },5000);
   });
