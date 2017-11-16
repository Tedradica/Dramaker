var admin = require("firebase-admin");

var serviceAccount = require("./to/dramaker2-bd7eb-firebase-adminsdk-1phry-4fe5405226.json");

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
  databaseURL: "https://dramaker2-bd7eb.firebaseio.com"
});

//알람 제공 부분

// This registration token comes from the client FCM SDKs.
var registrationToken = "cMpiTv_pqQM:APA91bG8aUKdzxsXQ81o2xt41VgFe4bYI7JOutqDSr-jYppWShUBNz6mmvOOk39YBU4ZYcDEC7i_3gtp3J8n7rvs8L5x5negmTQoLcKjXcYTBUzKAzoQ3K_B6Z1ySJY3IsIC_7M2YMUF";

//2017.08.10 10:35 Token값
// "cMpiTv_pqQM:APA91bG8aUKdzxsXQ81o2xt41VgFe4bYI7JOutqDSr-jYppWShUBNz6mmvOOk39YBU4ZYcDEC7i_3gtp3J8n7rvs8L5x5negmTQoLcKjXcYTBUzKAzoQ3K_B6Z1ySJY3IsIC_7M2YMUF"

// See the "Defining the message payload" section below for details
// on how to define a message payload.
var payload = {
  notification: {
    title: "Test알람 입니다.",
    content: "Test"
  }
};

// Send a message to the device corresponding to the provided
// registration token.
admin.messaging().sendToDevice(registrationToken, payload)
  .then(function(response) {
    // See the MessagingDevicesResponse reference documentation for
    // the contents of response.
    console.log("Successfully sent message:", response);
  })
  .catch(function(error) {
    console.log("Error sending message:", error);
  });
