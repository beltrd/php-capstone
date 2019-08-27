  /*form on contact us page start*/
  #contact_info form{
    color: #2b2b2b;
    padding: 10px;
    margin: 0 auto;
    background-color: #fff;
    min-height: 350px;
    width: 90%;
    box-shadow: 0 10px 12px rgba(0,0,0,0.2);
    z-index: 10;
    font-weight: 400;
    font-size: 25px;
    text-transform: uppercase;
  }
  #contact_info fieldset{
    border: none;
    font-size: 18px;
  }
  #contact_info legend{
    font-size: 25px;
    font-weight: 600;
  }
  #form label{
    display: block;
    float: left;
    width: 170px;
  }
  #contact_info label.beforeit:after{
    content: "*";
    font-size: 150%;
    color: #a44;
    font-weight: 700;
  }
  #contact_info input[type="submit"],
  #contact_info input[type="reset"]{
    background-color: #f9f9f9;
    font-size: 1.2rem;
    height: 50px;
    width: 170px;
    border-radius: 25px;
    border: 2px solid #5f6a70;
    text-transform: uppercase
  }

  #contact_info input[type="submit"]:hover,
  #contact_info input[type="reset"]:hover{
    background-color: #D57B93;
    color: #f9f9f9;
    border: 2px solid #D57B93;
    border-radius: 25px;
  }
  #content{
    padding-bottom: 40px;
  }
  #<?=$slug?> #form p{
    display: inline-block;
  }
  #contact_info input, textarea{
    background-color: #f9f9f9;
    border: 1px solid #d3e5e9;
    border-radius: 5px;
    height: 20px;
    width: 200px;
    padding: 5px;
    margin-right: 70px;
    margin-left: 10px;
    text-transform: uppercase;
  }
  textarea{
    width: 500px;
    height: 200px;
  }
  input{
    width: 230px;
  }
  /*form on contact us page end*/
