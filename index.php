<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Inlcude header -->
  <?php include "templates/header.php"; ?>

<div class="top">
  <div class="container">
    <h3 class="center h3">The mental health chatbot that provides hotlines.</h3>

    <!-- Disclaimer-->
      <p class="center p-disclaimer">
          <strong>DISCLAIMER: </strong>Please note that the purpose of M.A.X. is to assist people to seek help, instead of providing a cure.
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
                <h5 class = "h5 center">Hotlines <i class="fas fa-phone"></i></h5>
                  <p>
                    There are Dutch <a href="https://www.rijksoverheid.nl/documenten/brochures/2020/05/18/somber-of-gespannen-door-coronavirus-tips-en-hulplijnen">hotlines</a>
                    that offer a listening ear for the people in need. They are accessible via a phone number or a website.
                    Sometimes they also have the possibility to chat. M.A.X. will know a few Dutch hotlines (blue rows) and is able to suggest these to the person when needed.
                    By recognizing key words like "depressed", "anxious" or "stressed", M.A.X. aims to provide the appropriate hotline(s) suited for your current mental health status.
                  </p>
            </div>
        </div>
  </div>
</div>

<!-- Table with Dutch hotlines. The blue rows are known to M.A.X. -->
<div class="bottom">
  <div class="container">
      <table class="hotline">
        <caption class = "hotline-caption">The blue rows are known to M.A.X. <br>
          The white rows might be added later.
        </caption>
          <tr> <!-- Row 1 -->
            <th>Hotline</th>
            <th>Description</th>
            <th>Phone number(s)</th>
            <th>Availability</th>
            <th>Website</th>
          </tr>
          <tr> <!-- Row 1 -->
            <td class = "cell-top-left">Depression</td>
            <td class = "cell">For people with suicidal thoughts.</td>
            <td class = "cell"><a href="tel:0800-0113">0800 - 0113</a> (free) or <a href="tel:113">113</a> (usual call charges)</td>
            <td class = "cell">7 days per week, 24 hours.</td>
            <td class = "cell-top-right"><a href = "https://www.113.nl/" target="_blank" rel="noopener noreferrer">113 zelfmoordpreventie</a></td>
          </tr>
          <tr> <!-- Row 2 -->
            <td class = "cell">Anxiety or other issues</td>
            <td class = "cell">Help for anxiety, compulsory (e.g. OCD) or phobia issues.</td>
            <td class = "cell"><a href="tel:0343-753009">0343-753 009</a> (usual call charges)</td>
            <td class = "cell">7 days per week, from 9:00 until 13:30.</td>
            <td class = "cell"><a href = "https://adfstichting.nl/" target="_blank" rel="noopener noreferrer">ADF Stichting</a></td>
          </tr>
          <tr> <!-- Row 3 -->
            <td class = "cell">Traumatic events</td>
            <td class = "cell">Psychological help for a traumatic event.</td>
            <td class = "cell"><a href="tel:088-3305500">088-3305500</a> (usual call charges)</td>
            <td class = "cell">7 days per week, from 8:30 until 21:30.</td>
            <td class = "cell"><a href = "https://www.ivp.nl/ivp-accent/zorgprofessionals" target="_blank" rel="noopener noreferrer">ARQ IVP</a></td>
          </tr>
          <tr> <!-- Row 4 -->
            <td class = "cell">Schizophrenia or other issues</td>
            <td class = "cell">Help for psychological or mental issues.</td>
            <td class = "cell"><a href="tel:0900-1450">0900-1450</a> (usual call charges) or <a href="tel:+31-6-13863803">+31-6-13863803</a> (WhatsApp, free)</td>
            <td class = "cell">Phone: Mo-Fri, from 9:00 until 18:00. Chat & WhatsApp: Mo-Fri, from 9:00 until 17:30.</td>
            <td class = "cell"><a href = "https://mindkorrelatie.nl/" target="_blank" rel="noopener noreferrer">Mind-Korrelatie</a></td>
          </tr>
          <tr> <!-- Row 5 -->
            <td class = "cell-bottom-left">Coronavirus COVID-19</td>
            <td class = "cell">Questions about the coronavirus COVID-19.</td>
            <td class = "cell"><a href="tel:0800-1351">0800-1351</a> (free) or <a href="tel:+31-20-205-1351">+31-20-205-1351</a> (usual call charges)</td>
            <td class = "cell">7 days per week, from 8:00 until 20:00.</td>
            <td class = "cell-bottom-right"><a href = "https://www.rijksoverheid.nl/onderwerpen/coronavirus-covid-19 " target="_blank" rel="noopener noreferrer">Rijksoverheid</a></td>
          </tr>
          <tr> <!-- Row 6 -->
            <td>Children that want to share their feelings</td>
            <td>For children to share everything that’s on their mind.</td>
            <td><a href="tel:0800-0432">0800-0432</a> (free)</td>
            <td>7 days per week, from 11:00 until 21:00. Chat also available.</td>
            <td><a href = "https://www.kindertelefoon.nl/" target="_blank" rel="noopener noreferrer">De Kindertelefoon</a></td>
          </tr>
          <tr> <!-- Row 7 -->
            <td>Elderly that want to share their feelings</td>
            <td>Elderly that have questions about COVID-19 or just want to talk because they’re lonely.</td>
            <td><a href="tel:0348-466666">0348-466666</a> (usual call charges)</td>
            <td>7 days per week, from 9:00 until 21:00.</td>
            <td><a href = "https://www.anbo.nl/" target="_blank" rel="noopener noreferrer">ABNO</a></td>
          </tr>
          <tr> <!-- Row 8 -->
            <td>People that want to share their feelings</td>
            <td>People who need a listening ear.</td>
            <td><a href="tel:0900-0767">0900-0767</a> (usual call charges)</td>
            <td>7 days per week, 24 hours. Chat and email also available.</td>
            <td><a href = "https://www.deluisterlijn.nl/" target="_blank" rel="noopener noreferrer">De Luisterlijn</a></td>
          </tr>
    </table>
  </div>
</div>

  <!-- Add M.A.X., which is an instance of Watson Assistant -->
  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "c15fc9a1-8bd3-4630-90c1-a05fb31254cd", // The ID of this integration.
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
