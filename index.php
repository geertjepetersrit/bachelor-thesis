<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Inlcude header -->
  <?php include "templates/header.php"; ?>

<div class="top">
  <div class="container">
    <h3 class="center h3">The mental health chatbot that provides hotlines.</h3>

    <!-- Disclaimer-->
      <h6 class="center h6">
          DISCLAIMER: Please note that the purpose of M.A.X. is to assist people to seek help, instead of providing a cure.
          In other words, M.A.X. is simply an additional tool of mental health care and not a replacement. Use at your own risk.
      </h6>

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

<!-- Columns with info -->
<div class="middle">
  <div class="container">
        <div class="row">
            <div class="column"> <!-- Col 1 -->
                <h5 class = "h5">Mental health <i class="fas fa-brain"></i></h5>
                  <p>
                     Your mental health is at least as important as your physical health. Therefore, you should take good care of it.
                     Sadly, mental health disorders are not uncommon. If the threshold to talk to a human therapist is too high,
                     you can always talk to M.A.X. The first step is always the hardest, M.A.X. focuses on making this step easier.
                     The goal of M.A.X. is to make mental health care more accessible.
                  </p>
            </div>
            <div class="column">
                <h5 class = "h5">Chatbots <i class="fas fa-robot"></i></h5> <!-- Col 2 -->
                  <p>
                     You can chat with M.A.X. when you feel the need to share your feelings - the good and the bad.
                     M.A.X. is made with <a href = "https://www.ibm.com/cloud/watson-assistant">Watson&trade; Assistant Lite</a>,
                     which is a product of IBM. It uses a combination of rule-based (tree search) and
                     machine learning techniques (natural language processing) to be able to understand the conversation.
                  </p>
            </div>
            <div class="column"> <!-- Col 3 -->
                <h5 class = "h5">Hotlines <i class="fas fa-phone"></i></h5>
                  <p>
                    There are Dutch hotlines that offer a listening ear for the people in need. They are accessible via a phone number or a website.
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
        <caption class = "hotline-caption">The blue rows are known to M.A.X.</caption>
          <tr> <!-- Row 1 -->
            <th>Hotline</th>
            <th>Description</th>
            <th>Phone number(s)</th>
            <th>Availability</th>
            <th>Website</th>
          </tr>
          <tr> <!-- Row 1 -->
            <td class = "cell-top-left">113 zelfmoordpreventie</td>
            <td class = "cell">For people thinking about suicide or people that know someone who thinks about it.</td>
            <td class = "cell">(0900-0)113</td>
            <td class = "cell">7 days per week, 24 hours.</td>
            <td class = "cell-top-right"><a href = "https://www.113.nl/">https://www.113.nl/</a></td>
          </tr>
          <tr> <!-- Row 2 -->
            <td class = "cell">ADF Stichting</td>
            <td class = "cell">Help by anxiety, compulsory or phobia issues.</td>
            <td class = "cell">0343-753 009</td>
            <td class = "cell">7 days per week, from 9:00 until 13:30.</td>
            <td class = "cell"><a href = "https://adfstichting.nl/">https://adfstichting.nl/</a></td>
          </tr>
          <tr> <!-- Row 3 -->
            <td class = "cell">ARQ IVP</td>
            <td class = "cell">For psychological help by a traumatic event.</td>
            <td class = "cell">088-3305500</td>
            <td class = "cell">7 days per week, from 8:30 until 21:30.</td>
            <td class = "cell"><a href = "https://www.ivp.nl/ivp-accent/zorgprofessionals">https://www.ivp.nl/ivp-accent/zorgprofessionals</a></td>
          </tr>
          <tr> <!-- Row 4 -->
            <td class = "cell-bottom-left">Mind-Korrelatie</td>
            <td class = "cell">Help by psychological or mental issues.</td>
            <td class = "cell">0900-1450 or 06-13863803</td>
            <td class = "cell">Phone: Mo-Fri, from 9:00 until 18:00. Chat & WhatsApp: Mo-Fri, from 9:00 until 17:30.</td>
            <td class = "cell-bottom-right"><a href = "https://mindkorrelatie.nl/">https://mindkorrelatie.nl/</a></td>
          </tr>
          <tr> <!-- Row 5 -->
            <td>De Kindertelefoon (chat also available)</td>
            <td>For children to share everything that’s on their mind.</td>
            <td>0800 - 0432</td>
            <td>7 days per week, from 11:00 until 21:00.</td>
            <td><a href = "https://www.kindertelefoon.nl/">https://www.kindertelefoon.nl/ </a></td>
          </tr>
          <tr> <!-- Row 6 -->
            <td>ABNO</td>
            <td>Elderly that have questions about COVID-19 or just want to talk because they’re lonely.</td>
            <td>0348 - 46 66 66</td>
            <td>7 days per week, from 9:00 until 21:00.</td>
            <td><a href = "https://www.anbo.nl/">https://www.anbo.nl/</a></td>
          </tr>
          <tr> <!-- Row 7 -->
            <td>De Luisterlijn (chat and email also available)</td>
            <td>People who need a listening ear.</td>
            <td>0900-0767</td>
            <td>7 days per week, 24 hours.</td>
            <td><a href = "https://www.deluisterlijn.nl/">https://www.deluisterlijn.nl/</a></td>
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
