<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
  </head>

  <body>
    <script type="module">
      import {
        createChat
      } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';

      createChat({
        webhookUrl: 'https://datasea.app.n8n.cloud/webhook/3165afb3-2464-4be9-8be4-850a7e539408/chat',
        i18n: {
          en: {
            title: `Hi there!`,
            subtitle: "I'm Asetta your Smart Asset Virtual Assistant",
            footer: '',
            getStarted: 'New Conversation',
            inputPlaceholder: 'Type your question..',
          },
        },
        initialMessages: [
          'Hi there!',
          'My name is Asetta. How can I assist you today?'
        ],
        mode: 'fullscreen'
      });
    </script>
  </body>

</html>
