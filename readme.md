Safe drive system

This ensures the safety of the passengers in a public transport. This project consists of tho modules, one to monitor the vehicle driver and one to make note of the number of passengers getting in and out of the public transport.

Modules in the project :

    1. Drowsiness alert:
        This helps in alerting the driver while he/she is about to fall asleep, by monitoring the eye aspect ratio of the driver contoneusly.
    2. People counting:
        This helps in counting the number of people getting in and out of the vehicle. This helps in accedent recovery.

Note:

    1. Runs on xampp server
    2. Needs python interpreter 3.x
    3. Run the requirements.txt by, pip install requirements.txt
    4. Install https://play.google.com/store/apps/details?id=com.pas.webcam&hl=en in your android device
    5. Have two separate phones since they act as the cameras for this projet, you may also provide the ip address of the local cameras, if instaled in your place

How to:

    Download this file and extract it. Place the folder in htdocs
    Run the xampp server, the webpage appears.
    In the page provide the IP addresses of the cameras that you have.

    That's it the system works and now will continuously monitor the driver and the people in the public transport and log in into a spreadsheet.

Important:

    download "shape_predictor_68_face_landmarks.dat" from https://github.com/AKSHAYUBHAT/TensorFace/tree/master/openface/models/dlib
