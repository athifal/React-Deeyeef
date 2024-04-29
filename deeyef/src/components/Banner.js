import React from 'react'
import 'bootstrap/dist/css/bootstrap.css';
import Carousel from 'react-bootstrap/Carousel';
import './Banner.css';
import axios from 'axios';
 



const baseURL ="http://localhost/site/admin/getimage.php"

function Banner() {

  const [post, setPost] = React.useState(null);

    React.useEffect(() => {
      axios.get(baseURL).then((response) => {
        setPost(response.data);
      });
    }, []);
    if (!post) return null;
 

  return (

      
    <div>
      <div class=" mx-4 ">
    
      <Carousel controls={false} indicators={false}>
        
      {
        post.map((obj) => 
        <Carousel.Item interval={1500}>
          <img class="img-fluid imagess"
            // className="d-block w-100 img-fluid shadow-4"
src={"http://localhost/site/admin/bannerimage/"+ obj.imagename}
            alt="Image One"
          />
          
        </Carousel.Item>
            )
          }
      </Carousel>
    </div>
    </div>

  )
}

export default Banner