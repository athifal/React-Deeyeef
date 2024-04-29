import React from 'react'
import './Services.css'
import axios from 'axios';


const baseURL ="http://localhost/site/admin/getservice.php"
function Services() {


    const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;
 



  return (
    <div>
         <div class="olaaa"></div>
        
        <div class="aboutus">
                        <h2 class="aboutus-title olaaa">our services</h2>
                        </div>
        
        
        
        <div class="mt-5 mb-5">
    <div class="row">

    {
        post.map((obj) => 


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
       
    
    </div>
</div>

<svg viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" width="100%" class="d-block pipo">
    <path d="M 100 100 V 0 L 0 100" /> </svg></div>
  )
}

export default Services