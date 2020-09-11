<?php header("Content-type: text/css; charset: UTF-8"); ?>
@font-face{                                              
    font-family: pompiere;                               
    src: url("Pompiere-Regular.otf");                    
}                                                        
body,html{                                               
    width: 100%;                                         
    height: 100%;                                        
    overflow: hidden;                                    
}                                                        
body{                                                    
    background: url("<?php echo strtolower(PHP_OS);?>.png") center center no-repeat;
    background-size: 30%;                                
}                                                        
body, html, button, input[type="submit"]{                
    font-family: pompiere;                               
    font-size: 1.2rem;                                   
} 
button,form{                                                       
	display: inline;
}
h1{                                                      
    font-size: 2em;                                      
}                                                        
code{                                                    
    background-color: black;                             
    color: white;                                        
    font-size: 0.8rem;                                   
    padding: 4px;                                        
    border-radius: 4px;                                  
}
