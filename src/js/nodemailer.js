const nodemailer = require('nodemailer');

// let testEmailAccount = await nodemailer.createTestAccount();

let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'pasha.zelenko001@gmail.com',
        pass: 'NetrogaI1234'
      }
});

let result = await transporter.sendMail({
    from: '"Paxom4ik" <pasha.zelenko001@gmail.com>',
    to: "dev.pavel.zelenko@gmail.com",
    subject: "Message from E-cow",
    text: "This message was sent from Node js server.",
    html: "This <i>message</i> was sent from <strong>Node js</strong> server."
  });
  
  console.log(result);