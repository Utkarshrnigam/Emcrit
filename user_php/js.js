window.addEventListener('click', outsideClick);

        function succ(){
            
            var a= (form.fname.value).length;
            console.log(a);
        }

function openModal1(){
    var modal1 = document.getElementById('simpleModal1');
    
  modal1.style.display = 'block';
}
        
function openModal2(){
    var modal2 = document.getElementById('simpleModal2');
    
  modal2.style.display = 'block';
}


function closeModal1(){
    var modal1 = document.getElementById('simpleModal1');
  modal1.style.display = 'none';
}
        
function closeModal2(){
    var modal2 = document.getElementById('simpleModal2');
  modal2.style.display = 'none';
}


function outsideClick(e){
    var modal1 = document.getElementById('simpleModal1');
  if(e.target == modal1){
    modal1.style.display = 'none';
  }
}
        
function outsideClick(e){
    var modal2 = document.getElementById('simpleModal2');
  if(e.target == modal2){
    modal2.style.display = 'none';
  }
}
    
        
var marginy=0;
var marginc=0;
var destination=0;
var speed=10;
var scroller=null;
var id1;
var per=50;

function croll(id)
{
    if(id==1)
        {
            speed=5;
        }
    if(id==2)
        {
            speed=10;
        }
    if(id==3)
        {
            speed=15;
        }
    if(id==4)
        {
            speed=20;
        }
    if(id==5||id==6||id==7)
        {
            speed=25;
        }
    var destination=document.getElementById(id).offsetTop;
    
    if(window.pageYOffset<destination)
        {
    scroller=setTimeout(function(){
        croll(id);
    },1)
    marginy=marginy+speed;
    if(marginy>=destination-400)
        {
            clearTimeout(scroller);
        }
    window.scroll(0,marginy);
    
}
    
    else
        {
    if(id==5||id==6||id==7)
        {
            speed=5;
        }
    if(id==4)
        {
            speed=10;
        }
    if(id==3)
        {
            speed=15;
        }
    if(id==2)
        {
            speed=20;
        }
    if(id==1)
        {
            speed=25;
        }
    marginc=window.pageYOffset;
	scroller = setTimeout(function(){
		croll(id);
	}, 1);

	marginc = marginc - speed;

	if(marginc <= destination){
		clearTimeout(scroller);
	}	
    
	window.scroll(0, (marginc));
}

        }


window.onscroll=function(){
    marginy=this.pageYOffset;
    marginc=this.pageYOffset;
    
}


function vision(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="visions.html" ></object>';
            
            
  }
        function Quality(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="quality policy.html" ></object>';
  }
        function os(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="Organisational Structure.html" ></object>';
  }
        function Functions(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="functions.html" ></object>';
  }
        function gc(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="Governing Council.html" ></object>';
  }
        function hr(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="History of RDSO.html" ></object>';
  }
        function cbr(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="cbr.html" ></object>';
  }
        function Infrastructure(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="Infrastructure.html" ></object>';
  }
        function cl(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="Central Library.html" ></object>';
  }
        
        function ep(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="ep.html" ></object>';
  }
        
        
        function ipr(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="IPR1.html" ></object>';
  }
        function ia(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="ia.html" ></object>';
  }
        function sbm(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="sbm.html" ></object>';
  }
        function ei(){
            document.getElementById("q").innerHTML='<object class="obj" type="text/html" data="eoi.html" ></object>';
  }
        
        
        
        
        
        
        
        
        
        
        function press(){
            document.getElementById("w").innerHTML='<object class="obj" type="text/html" data="press.html" ></object>';
  }
        function retierde(){
            document.getElementById("w").innerHTML='<object class="obj" type="text/html" data="retierde.html" ></object>';
  }
        function futuristic(){
            document.getElementById("w").innerHTML='<object class="obj" type="text/html" data="futuristic.html" ></object>';
  }
        
        
        
        
        
        function pen(){
            document.getElementById("st").innerHTML='<object class="obj" type="text/html" data="pen.html" ></object>';
  } 
        function women(){
            document.getElementById("st").innerHTML='<object class="obj" type="text/html" data="women.html" ></object>';
  }    
        function staff(){
            document.getElementById("st").innerHTML='<object class="obj" type="text/html" data="staff.html" ></object>';
  }
        
        
        
        
        
        function eten(){
            document.getElementById("w2").innerHTML='<object class="obj" type="text/html" data="eten.html" ></object>';
  }function ems(){
            document.getElementById("w2").innerHTML='<object class="obj" type="text/html" data="ems.html" ></object>';
  }function civil(){
            document.getElementById("w2").innerHTML='<object class="obj" type="text/html" data="civil.html" ></object>';
  }function stores(){
            document.getElementById("w2").innerHTML='<object class="obj" type="text/html" data="stores.html" ></object>';
  }function quotation(){
            document.getElementById("w2").innerHTML='<object class="obj" type="text/html" data="quotation.html" ></object>';
  }
  


 
    


function myMap() {
  var myCenter = new google.maps.LatLng(26.819283, 80.894323);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}


