<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Inlcude header -->
  <?php include "templates/header.php"; ?>

<div class="top">
  <div class="container">
    <h3 class="center h3">The mental health chatbot that provides support.</h3>

    <!-- Disclaimer-->
      <p class="center p-disclaimer">
          <strong>DISCLAIMER: </strong>Please note that the purpose of M.A.X. is to support people, instead of providing a cure.
          In other words, M.A.X. is simply an additional tool of mental health care and not a replacement. Use at your own risk.
      </p>

    <!-- We want to hide this element initially, because web chat isn't ready yet. -->
    <div class="wrapper">
      <button type="button" class="chatLauncher" style="display:none;">
        <div>
          Have a chat.
        </div>
        </button>
    </div>

  </div>
</div>

<!-- Scroll to top button -->
<button onclick="goToTop()" id="button-top" title="Go to top">^</button>

<!-- JavaScript to make the button working -->
<script>
  // Get the button:
  mybutton = document.getElementById("button-top");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function goToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
</script>

<!-- Columns with info -->
<div class="middle">
  <div class="container">
        <div class="row">
            <div class="column"> <!-- Col 1 -->
                <h5 class = "h5 center">Mental health <i class="fas fa-brain"></i></h5>
                  <p>
                     Your mental health is at least as important as your physical health. Therefore, you should take good care of it.
                     Sadly, mental health disorders are not uncommon. If the threshold to talk to a human therapist is too high,
                     you can always talk to M.A.X. The first step is always the hardest, M.A.X. focuses on making this step easier.
                     The goal of M.A.X. is to make mental health care more accessible.
                  </p>
            </div>
            <div class="column">
                <h5 class = "h5 center">Chatbots <i class="fas fa-robot"></i></h5> <!-- Col 2 -->
                  <p>
                     You can chat with M.A.X. when you feel the need to share your feelings - the good and the bad.
                     M.A.X. is made with <a href = "https://www.ibm.com/cloud/watson-assistant">Watson&trade; Assistant Lite</a>,
                     which is a product of IBM. It uses a combination of rule-based (tree search) and
                     machine learning techniques (natural language processing) to be able to understand the conversation.
                  </p>
            </div>
            <div class="column"> <!-- Col 3 -->
                <h5 class = "h5 center">Support <i class="fas fa-heart"></i></h5>
                  <p>
                    Whatever the reason might be you need a talk, M.A.X. will try to support you as best as it can.
                    The support includes making a joke, smalltalk about the weather, or lending you a listening ear.
                    M.A.X. can do it all when you just need to share your feelings. Whenever and where ever. Ready when you are.
                  </p>
            </div>
        </div>
  </div>
</div>

  <!-- Add M.A.X., which is an instance of Watson Assistant -->
  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "3283e16e-cd22-4633-bdd1-2a305b8c6275", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "3877c289-c488-477d-989e-07c2a825f577", // The ID of your service instance.

        showLauncher: false,     // Config option to hide the default launcher.
        onLoad: function(instance) {
          // Select the button element from the page.
          const button = document.querySelector('.chatLauncher');

          // Add the event listener to open your web chat.
          button.addEventListener('click', function clickListener() {
            instance.openWindow();
          });

          // Render the web chat. Nothing appears on the page, because the launcher is
          // hidden and the web chat window is closed by default.
          instance.render().then(function() {
            // Now that web chat has been rendered (but is still closed), we make the
            // custom launcher button visible.
            button.style.display = 'block';
            button.classList.add('open');
          });
        }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
</script>

  <!-- Inlcude footer -->
  <?php include "templates/footer.php"; ?>

</html>
