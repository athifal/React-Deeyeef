import React from 'react'
import 'bootstrap/dist/css/bootstrap.css';
import Carousel from 'react-bootstrap/Carousel';
import './Testi.css';
import axios from 'axios';


const baseURL ="http://localhost/site/admin/gettesti.php"
function Testimonials() {


    
    const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;
  return (
   <div class="olaaa">

<div class="aboutus">
                        <h2 class="aboutus-title">Says About Us

Testimonials</h2>
</div>

       



<Carousel controls={false} indicators={false}>



{
        post.map((obj) => 
        
 
        <Carousel.Item interval={3500}>
        
        


        <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="testimonial-bg">
                <div id="testimonial-slider" >
                    <div class="testimonial">
                        <p class="description">
                        {obj.testmessage}
                        </p>
                        <div class="pic">
                            <img src={"http://localhost/site/admin/testiimages/"+ obj.testiimage} alt=""/>
                        </div>
                        <h3 class="title">{obj.testihead}</h3>
                       
                    </div></div>
            </div>
        </div>
    </div>
</div>

        </Carousel.Item>
        )
}
       
      </Carousel>

    </div>
  )
}

export default Testimonials