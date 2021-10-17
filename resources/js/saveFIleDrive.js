/* 
Google Drive API:
Demonstration to:
1. upload 
2. delete 
3. create public URL of a file.
required npm package: googleapis
*/
const { google } = require("googleapis");
const path = require("path");
const fs = require("fs");

const CLIENT_ID =
    "1055897391617-t7kjrlals46obdn7988tj1lsl9huctsk.apps.googleusercontent.com";
const CLIENT_SECRET = "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";
const REDIRECT_URI = "https://developers.google.com/oauthplayground";

const REFRESH_TOKEN =
    "1//045VQ6AWBmUkqCgYIARAAGAQSNwF-L9IrK3kQSWSAw3I5_OzXcFCkACFzk6Kh6pTPyOkWjfVp03cqsZ3VNgzpTmd3XTMiC_EmgnM";

const oauth2Client = new google.auth.OAuth2(
    CLIENT_ID,
    CLIENT_SECRET,
    REDIRECT_URI
);

oauth2Client.setCredentials({ refresh_token: REFRESH_TOKEN });

const drive = google.drive({
    version: "v3",
    auth: oauth2Client,
});

/* 
filepath which needs to be uploaded
Note: Assumes example.jpg file is in root directory, 
though this can be any filePath
*/

export async function uploadFile(file_path) {
    const filePath = path.join(__dirname, "../../storage/app/" + file_path);
    try {
        const response = await drive.files.create({
            requestBody: {
                name: "aexample.pdf", //This can be name of your choice
                mimeType: "application/pdf",
            },
            media: {
                mimeType: "application/pdf",
                body: fs.createReadStream(filePath),
            },
        });
        // console.log();
        console.log("XXXXXXXXXXXXXXXXXXXXX" + response.data);
    } catch (error) {
        console.log(error.message);
    }
}

// uploadFile();
