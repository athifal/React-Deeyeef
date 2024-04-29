import React from 'react'
import './logo.css'
import axios from 'axios';


const baseURL ="http://localhost/site/admin/getlogo.php"

function Logo() {



    const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;


  
    
       



  return (
  <div><div class="  mt-5 olaaa">
     <div class="aboutus ">
                        <h2 class="aboutus-title">OUR partners<div class="aboutus-title2"></div></h2>
                        </div>
        
        <div class=" mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news ">
               
                <marquee class="news-scroll" behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();"> 
                {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                 {
        post.map((obj) => 
                
                <img class="postcard__img img-fluid" src={"http://localhost/site/admin/logoimage/"+ obj.logos}/>
                
        )
                }
                </marquee>
            </div>
        </div>
    </div>
</div>
</div>
<svg viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" width="100%" class="d-block pipo">
    <path d="M 100 100 V 0 L 0 100" /> </svg>
   
     </div>
  )
}

export default Logo