const sendgrid = require('@sendgrid/mail');

exports.handler = async (event, context) => {
  if (event.httpMethod !== 'POST') {
    return { statusCode: 405, body: 'Method Not Allowed' };
  }

  const { first_name, last_name, email, message } = JSON.parse(event.body);

  sendgrid.setApiKey(process.env.SENDGRID_API_KEY);

  const msg = {
    to: 'rick@gmail.com',
    from: email,
    subject: `Nouveau message de contact de ${first_name} ${last_name}`,
    text: `Prénom: ${first_name}\nNom: ${last_name}\nEmail: ${email}\n\nMessage:\n${message}`,
  };

  try {
    await sendgrid.send(msg);
    return {
      statusCode: 200,
      body: 'Message envoyé avec succès!',
    };
  } catch (error) {
    return {
      statusCode: 500,
      body: 'Échec de l\'envoi du message.',
    };
  }
};
