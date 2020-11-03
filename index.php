<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php include "templates/header.php"; ?>

  <h3 class="center">The mental health chatbot that provides hotlines.</h3>

  <h4 class = "center grey-text">Have a chat.</h4>

<div class="container">
      <div class="row">
          <div class="col-lg-4">
              <h5>Chatbots</h5>

              <p>M.A.X. is a mental health chatbot. You can chat with it and it when you feel the need to share your feelings.
                 It makes use of a combination of rule-based and machine learning techniques to provide the appropriate hotlines
                 suited for your current mental health status. It does so by recognizing key words in the conversation.</p>

          </div>
          <div class="col-lg-4">
              <h5>Mental health</h5>

              <p>Your mental health is at least as important as your physical health. You should take good care of it.
                 Sadly, mental health disorders are quite common. For example, people can struggle with major depression disorder,
                 generalized anxiety disorder, post-traumatic stress disorder or schizophrenia. If the step to talk to a human therapist
                 is too high, you can always talk to M.A.X. </p>

          </div>
          <div class="col-lg-4">
              <h5>Hotlines</h5>

              <p>There are hotlines that offer a listening ear for the people in need. They are accessible via a phone number or a website.
                 Sometimes they also have the possibility to chat. M.A.X. will know a few hotlines and is able to suggest these to the person when needed.</p>
          </div>
      </div>
</div>

  <script>
    window.watsonAssistantChatOptions = {
      integrationID: "b6997083-bf0a-4b6f-a2f7-65aae15dbe40", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "3877c289-c488-477d-989e-07c2a825f577", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script>

  <?php include "templates/footer.php"; ?>

</html>
