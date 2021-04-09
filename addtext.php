<!DOCTYPE HTML>

<html>
   <head>
   
      <style>
         #test {
            width: 1060px;
            height: 1500px;
            margin: 0px auto;
         }
      </style>
      
      <script type = "text/javascript">
                  var canvas = document.getElementById('mycanvas');
                     var ctx = canvas.getContext('2d');
                         var historyDeta = new Array();
function saveData (data) {
    (historyDeta.length === 20) && (historyDeta.shift());
    historyDeta.push(data);
}
function cUndogg(){
document.getElementById("wf").value = "erwss";
    if(historyDeta.length < 1) return false;
    canvas.putImageData(historyDeta[historyDeta.length - 1], 0, 0);
    historyDeta.pop()
}
               
          
  
          
         
function upCan(canvas) { 
var image_data = canvas.toDataURL("image/png");  


	document.getElementById('MyPix').src = image_data; 
	saveData(image_data);
	
	} 
	function dpicture(ctx) { 
	

   
var sun = new Image();
    sun.addEventListener('load', function(){
        ctx.drawImage(sun, 0, 0);
    }, false);
    sun.src = 'flowers.png'; } 

 


         
    
         function drawShape() {
         
            // get the canvas element using the DOM
            var canvas = document.getElementById('mycanvas');
            
            // Make sure we don't execute when canvas isn't supported
            
                       
   
            if (canvas.getContext) {
            
               // use getContext to use the canvas for drawing
               var ctx = canvas.getContext('2d');
               
dpicture(ctx);
   
               ctx.fillStyle = '#00F';

                const rect = canvas.getBoundingClientRect();
    const x = event.clientX - rect.left
    const y = event.clientY - rect.top
               
               ctx.textBaseline = 'Top';
var fon = document.getElementById("fon").value
var sz = document.getElementById("sz").value;


               ctx.font = 'Bold '+sz+" "+fon;
               var mtxt = document.getElementById("mytext").value;
               ctx.strokeText(mtxt, x, y);
               var data = canvas.toDataURL("image/png");  
              
               
   
       upCan(canvas);

   
                          
               
            } else {
               alert('You need Safari or Firefox 1.5+ to see this demo.');
            }
         } 
         

    
        
      </script>
   </head>
   
   <body id = "test"><h1>Click on the canvas to initiate your card</h1><h2>Choose a font and a size</h2>
   <p>Choose a font and size, then write your text in the textbox. Click on the image to position your text.</p><form><input type='text' value='' style='width:200px;height:60px;border:solid #FF6CC5 2px;border-radius:0px;background:white;color:#FF6CC5;font-size:2em;' id='mytext' /><select style='width:200px;height:60px;border-radius:0px;background:#FF6CC5;color:white;font-size:2em;' id='fon'>
   <option value='Fantasy'>Fantasy</option>
   <option value='Cursive'>Cursive</option>
   <option value='Comic Sans MS'>Comic</option>
      <option value='Arial'>Arial</option>
      <option value='Tahoma'>Tahoma</option>
      </select><input type='text' id='wf' name='wf' value='' />
 
   <select style='width:150px;height:60px;border-radius:0px;background:#FF6CC5;color:white;font-size:2em;' id='sz'>
   
   <option value='10px'>10</option>
   <option value='15px'>15</option>
   <option value='20px'>20</option>
   <option value='25px'>25</option>
   <option value='30px'>30</option>
   <option value='35px'>35</option>
   <option value='40px'>40</option>
   <option value='45px'>45</option>
   <option value='50px'>50</option>
      <option value='55px'>55</option>
         <option value='60px'>60</option>
           <option value='65px'>65</option>
         <option value='70px'>70</option>
            <option value='75px'>75</option>
         <option value='80px'>80</option>
   </select></form><button onclick='cUndogg();'>undo</button><canvas onclick='drawShape();' height='1500' width='1060' id = "mycanvas"></canvas>
    <div class="save_box">             
	         Save your sketchpad by using right-click or long tap on the thumbnail below:<br>
	         <center>
		     
    	             <img id="MyPix">
                 </center>
	     </div>
	     
	   
  
     
   </body>
   
</html>