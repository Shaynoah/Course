<!DOCTYPE html>
<html>
    <title>My Dashboard</title>
    <head>
    <style>
       
        *,*::before,*::after{
            box-sizing: border-box;
        }
        
        body{
            font-size: 16px;
            font-family: 'caveat';
            background-color:rgb(24, 24, 49);
            border: 1px solid gold;
            margin: 0;
            padding: 0 30px 0 30px;
            overflow: none;   
        }
        nav{
            display: flex;
            flex-direction: column;
            background-color: black;
            margin:0;
            padding: 0 20px 0 20px;
            width: 15%;
            position: fixed;
            top:0;
            left:0;
            margin-top: auto;
            height: 100%;  
        }
        a{
            display: flex;
            height: 40px;
            width: auto;
            background: linear-gradient(145deg,rgb(4, 4, 102),darkblue);
            color: gold;
            border-radius: 30px;
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;    
            text-decoration: none;
            margin: 20px 0 20px 10px;  
        padding: 8px 16px;
        
        }
        a:hover{
            background:lightblue;
            box-shadow: inset 29px 29px 58px #0031f693,
                        inset -29px -29px 58px lightblue;
        }
        section{
            margin-left: 14%;
            display: grid;
            grid-template-rows:;   
            border-radius: 20px;
            color:goldenrod;
            background-color:rgb(24, 24, 49);
            
        }

        .section>div{
           
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;  
        }
        
        footer{
        background-color: blanchedalmond;
        color:black;
       padding:-;
        text-align: center;
        width: 100%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        
        }
        .links{
            display: flex;
            flex-direction: column;
        }
        .head{
            background-image: url(img.jpg);
            background-size: auto;
            margin-left: 15%;
            color:lightblue;
            border-radius: 20px;
margin-top:0%;
        
            font-family: Georgia, 'Times New Roman', Times, serif;

        }
        .title{
            color: gold;
           font-family: Georgia, 'Times New Roman', Times, serif;

           
        }
        .log{
            width: 400px;
           margin-left: 300px;
            overflow: none;
            max-height: 300px;

        }
        .hm{
            width: 400px;
            float:right;
            border-radius: 20px;
            overflow: none;
            
        }
        h1{
            text-align: center;
            letter-spacing: 2px;
        }
        button{
          
          width: 150px;
        color: darkgoldenrod;
        background-color:beige;
        border-radius: 10px;
        height: 40px;
        font-size: 15px;
        }
        .ig{
          width: 210px;
          display:inline-flex;
        }
       

      
        
        /* Style for FAQ section */
.faq {
  width: 50%;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  color: white;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-size: 20px;
  
}

/* Style for question labels */
.faq-label {
  max-width: 600px;
  display: block;
  margin-bottom: 10px;
  cursor: pointer;
  font-weight: bold;
}

/* Hide checkboxes */
.faq-toggle {
  display: none;
}

/* Style for answer boxes */
.faq-answer {
  display: none;
  padding-left: 20px;
  color: white;
}

/* Show answer when checkbox is checked */
.faq-toggle:checked + .faq-label + .faq-answer {
  display: block;
}
hr{
  width: 100%;
}
.learn{
  color: white;
  font-size: 10px;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

    </style> 
        
    </head>
    <body class="body">
        <nav>
            <div><h3 class="title">COURSE CORRECT</h3></div>
            <div class="links">
            <a href="/Course/php/dashbd.php">Home</a>
            <a href="/Course/public/services.html">Services</a>
            <a href="/Course/public/wallet.html">Wallet</a>
            <a href="/Course/public/chatroom.html">Chatroom</a>
            <a href="/Course/public/setting.html">Settings</a>
            <a href="/Course/php/logout.php">Logout</a></div>
        </nav>
        <section>
            <div class="section">
            <h1 style="font-size:3vw;">
            WE HELP YOU<br>GET YOUR<br>GRADES UP!</h1>
            <img class="log"src="/Course/assets/images/IMG2.jpg"><BR><BR>
            <h1 style="font-size: 3vw;">COURSE CORRECT</h1><hr><br>
           

<h1>Welcome!</h1>
<div class="learn">
<p>
  
  Course Correct is a National Service Provider for those requiring assistance<br>
  in Online assignments,Cats,Projects,Reports and even Exams.The prices are crazy cheap!<br>
  
</p>
</div>
<button id="learnMoreBtn">Learn More</button>
<div class="info" id="additionalInfo" style="display: none;">
<p>To get to learn more about Course Correct,kindly read the "About us"<br>
Section on the Home Page or visit our Instagram profile:<a class="ig" href="https://WWW.istagram.com/coursecorrect.ke"target="_blank">@coursecorrect.ke</a><br>or Our Whatsapp Catalogue.(0796413765)</p>
</div>



<script>
  document.getElementById('learnMoreBtn').addEventListener('click', function() {
    var infoDiv = document.getElementById('additionalInfo');
    if (infoDiv.style.display === 'none') {
      infoDiv.style.display = 'block';
    } else {
      infoDiv.style.display = 'none';
    }
  });
</script>




           <hr>
           <div>
           <video width="100%"height="440"controls>
                        <source src="/Course/assets/vedios/suzie.mp4">
                      </video>
                      </div>
             <p>
              
              <div>
               <h1 style="font-size:2vw;"> It's Pretty Simple!</h1>
               
</div>
             </p>
             
<hr>
<h1 style="font-size:3vw;">Frequently Asked<br> Questions</h1>
<hr>
<div class="faq">
  <div class="faq-question">
    <input type="checkbox" class="faq-toggle" id="question1">
    <label for="question1" class="faq-label"> How do we work?</label>
    <div class="faq-answer">
      <p>As we said,its pretty Simple!<br>You send your assignments,Cats<br>Projects,Reports or Exam requests<br>
      and we will do it for you.</p>
    </div>
  </div>
</div>
<div class="faq">
  <div class="faq-question">
    <input type="checkbox" class="faq-toggle" id="question2">
    <label for="question2" class="faq-label">What are the Charges?</label>
    <div class="faq-answer">
      <p>The prices vary per requests made.The prices are crazy cheap!<br>That is:Assignments-sh200,Cats-sh 300<br>
    Exams-sh 400,Projects-sh 500<br>
  </p>
    </div>
  </div>
</div>
<div class="faq">
  <div class="faq-question">
    <input type="checkbox" class="faq-toggle" id="question3">
    <label for="question3" class="faq-label">How do we trust your services?</label>
    <div class="faq-answer">
      <p>Here you get your work done with humans so no need to worry about AI generated results.<br>Extensive researches are
      carried out well before delivery.
  </p>
    </div>
  </div>
</div>
<div class="faq">
  <div class="faq-question">
    <input type="checkbox" class="faq-toggle" id="question4">
    <label for="question4" class="faq-label">How long do you take to Deliver the tasks? </label>
    <div class="faq-answer">
      <p>For assignments and unlengthy cats/projects we take less than 3 hours.<br>If more time will be needed you shall be notified.<br>
      Online cats and Exams are done on requests within the specified period.
  </p>
    </div>
  </div>
</div>
<hr>
  <!-- Add more questions following the same structure -->
  
</div>

</body>
</html>





            
            </section>
       
        
        <footer>
            @copyright:2023 dashboardApp
        </footer>
        
       </div>
    </body>
</html>