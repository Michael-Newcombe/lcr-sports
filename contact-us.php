<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>LCR Sports</title>
  </head>
  <body>

  <?php
    include ("./form.php");
  ?>

    <div class="main-container">
      <header>
        <div class="container">
          <div class="header-container">
            <div class="contact-info">
              <div class="phone-contact">
                <svg class="contact-icons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"        viewBox="0 0 172 172"><path d="M121.69,102.5636c-2.32773,-1.36453 -5.18867,-1.33587 -7.50493,0.04013l-11.7304,6.98893c-2.62587,1.5652 -5.90533,1.38173 -8.31333,-0.4988c-4.1624,-3.2508 -10.86467,-8.7204 -16.69547,-14.5512c-5.8308,-5.8308 -11.3004,-12.53307 -14.5512,-16.69547c-1.88053,-2.408 -2.064,-5.68747 -0.4988,-8.31333l6.98893,-11.7304c1.38173,-2.31627 1.3932,-5.20013 0.02867,-7.52787l-17.21147,-29.40053c-1.6684,-2.84373 -4.98227,-4.24267 -8.1872,-3.4572c-3.1132,0.7568 -7.1552,2.60293 -11.39213,6.8456c-13.26693,13.26693 -20.3132,35.64413 29.57827,85.5356c49.89147,49.89147 72.26293,42.85093 85.5356,29.57827c4.2484,-4.2484 6.0888,-8.29613 6.85133,-11.41507c0.774,-3.1992 -0.602,-6.49013 -3.44,-8.1528c-7.0864,-4.1452 -22.37147,-13.09493 -29.45787,-17.24587z"></path></svg>
                <p>Call: <a href="tel:02086387273">02086387273</a></p>
              </div>
              <div class="email-contact">
                <svg class="contact-icons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16"       viewBox="0 0 172 172"><path d="M28.66667,28.66667c-7.33867,0 -13.32686,5.53715 -14.16536,12.65365l71.4987,44.67969l71.49869,-44.67969c-0.83849,-7.1165 -6.82669,-12.65365 -14.16536,-12.65365zM14.33333,55.55566v73.44434c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-73.44434l-67.87337,42.41211c-2.322,1.44767 -5.26459,1.44767 -7.58659,0z"></path></svg>
                <p>Email: <a href="mailto:charlie@lcrsports.co.uk">charlie@lcrsports.co.uk</a></p>
              </div>
            </div>
            <div class="social-media">
              <a href="https://www.facebook.com/lcrsports/" target="_blank">
                <svg class="social-media-icons" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
              </a>
              <a href="https://www.instagram.com/lcr_sports/" target="_blank">
                <svg class="social-media-icons" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
            </div>
          </div>
        </div>
      </header>
    <nav>
      <div class="container">
      <div class="nav-bar">
          <a href="./index.php"><span class="nav-title"><img src="./images/logo.svg" width="72px"></span></a>
          <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="24" height="24" viewBox="0 0 172 172"
          ><path d="M21.5,35.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,78.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,121.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376z"></path></svg>
          <div class="nav-links">
            <a href="./index.php">Home</a>
            <a href="./about.php">About LCR Sports</a>
            <a href="./courses.php">Courses</a>
            <a href="./school-partnerships.php">School Partnerships</a>
            <a href="./birthday-parties.php">Birthday Parties</a>
            <a class="current" href="./contact-us.php">Contact Us</a>
          </div>
        </div>
        </div>
    </nav>
    <section id="page-index-section">
    <div class="container">
    <div class="page-index">
      <h1>Contact Us</h1>
      <div class="current-page">
      <a class="current" href="./index.php">Home</a>
      <span>
          <svg class="page-index-icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="#4a4a4a"><path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/></svg>
      </span>
      <p>Contact Us</p>
    </div>
    </div>
    </div>
    </section>
    <div class="container">
    <div class="text-container">
        <p>
        To get in touch please call us on: 07876277302
        </p>
        <br>
        <p>
         Send us an email at charlie@lcrsports.co.uk
        </p>
        <br>
        <p>
        Or complete the form below  
        </p>
        <br>
        <p class="has-text-danger has-text-weight-semibold">
        * Please Note *
        </p>
        <p>
        Fields marked with a <b style="font-size: 16px;">*</b> must be filled in
        </p>
      </div>
    </div>
    <section id="form">
      <div class="container">
      <div class="form-container">
        <form id="form" method="post" name="emailForm" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>"> 
        <div class="field">
            <label class="label">Name *
            </label> 
            <div class="control has-icons-left">
              <input class="input <?php echo $name_error_style; ?>" name="name" type="text" value="<?php echo $name;?>" placeholder="e.g Alex Smith">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>   
            </div>
            <p class="help is-danger"><?php echo $name_error;?></p>
          </div>
          <br>
          <div class="field">
            <label class="label">Email *</label>
            <div class="control has-icons-left">
              <input class="input <?php echo $email_error_style; ?>" name="email" type="text" value="<?php echo $email;?>" placeholder="e.g. alexsmith@gmail.com">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>    
            </div>
            <p class="help is-danger"><?php echo $email_error;?></p>
          </div>
          <br>

          <div class="field">
              <label class="label">Contact Number *</label>
              <div class="control has-icons-left">
                <input class="input <?php echo $number_error_style; ?>" name="number" type="text" value="<?php echo $number;?>" placeholder="e.g. 07876277302">
                <span class="icon is-small is-left">
                  <i class="fas fa-phone"></i>
                </span>    
              </div>
              <p class="help is-danger"><?php echo $number_error;?></p>
          </div>
          <br>
          <div class="field">
              <label class="label">Query *
              </label>
              <div class="control has-icons-left">
                <div class="select <?php echo $select_error_style; ?>">
                  <select name="options[]" id="dropdown">
                    <option value="select option">Select Option</option>
                    <option value="Courses">Courses</option>
                    <option value="School Partnerships">School Partnerships</option>
                    <option value="Kids Parties">Kids Parties</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="icon is-small is-left">
                  <i class="fas fa-futbol"></i>
                </div>
              </div>
              <p class="help is-danger"><?php echo $select_error;?></p>
            </div>
            <br>
            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" name="message" placeholder="Textarea"><?php echo $message;?></textarea>
                </div>
              </div>
              <br>

            <div class="field">
              <div class="control">
                <div class="form-button-container">
                <button class="green-button" type="submit" name='submit'>
                    Send message
                </button>
              </div>
              </div>
            </div>
              
        </form>   
          </div>
        </div>
      <div class="lcr-images">
      </div>
    </section>

    </div>
    <footer>
      <p>Copyright &copy; 2019. LCR Sports</p>
    </footer>
    <script src="./js/nav.js"></script>
    <script src="./js/formValidation.js"></script>
    <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>


