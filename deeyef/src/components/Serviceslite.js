import React from 'react'
import 'bootstrap/dist/css/bootstrap.css';
import Carousel from 'react-bootstrap/Carousel';
import { Link } from 'react-router-dom'

import axios from 'axios';
import './Services.css'





const baseURL ="http://localhost/site/admin/getservice.php"
function Serviceslite() {

  const n=3;
  const k=6;

	const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;
 

  return (


  
    <div class=" mt-5 olaaa" >
<Link to="/Services" style={{textDecoration:"none"}}>

<div class="aboutus">
                        <h2 class="aboutus-title">our services</h2>
    </div>
<Carousel controls={false} indicators={false}>
<Carousel.Item interval={1500}>

{
        post.slice(0, n).map((obj) => 

 
       
       
        
	
    <div class="col-md-4 mt-5">
            <div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up"> <a href="#" class="icon-box text-center" data-bg-color="#fff" style={{backgroundColor:"rgb(255, 255, 255)"}} data-abc="true">
                    <div class="icon"> <img class="image" src={"http://localhost/site/admin/serviceimage/"+ obj.serviceimage} width="240"/> </div>
                    <div class="content">
                        <h3 class="title fz-20">{obj.servicehead}</h3>
                        <div class="desc">
                            <p>{obj.servicedescription}</p>
                        </div> <a href="mailto:info@deeyef.com"><span class="link">Start here <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </a> </div>
                
        </div>
        

       
		 )
		}
     </Carousel.Item>
     <Carousel.Item interval={1500}>

{
        post.slice(n, k).map((obj) => 

 
       
       
        
	
    <div class="col-md-4 mt-5">
            <div class="col max-mb-30 aos-init aos-animate" data-aos="fade-up"> <a href="#" class="icon-box text-center" data-bg-color="#fff" style={{backgroundColor:"rgb(255, 255, 255)"}} data-abc="true">
                    <div class="icon"> <img class="image" src={"http://localhost/site/admin/serviceimage/"+ obj.serviceimage} width="240"/> </div>
                    <div class="content">
                        <h3 class="title fz-20">{obj.servicehead}</h3>
                        <div class="desc">
                            <p>{obj.servicedescription}</p>
                        </div> <span class="link">Start here <i class="fa fa-arrow-right"></i></span>
                    </div>
                </a> </div>
        </div>
        

       
		 )
		}
     </Carousel.Item>
        
      </Carousel>

      </Link>
        </div>
  )
}

export default Serviceslite