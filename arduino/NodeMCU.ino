#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

#define echo 0
#define trigger 2

const char* ssid = "Adaww";
const char* password = "mantap123";

long duration, distance;

WiFiServer server(80);

String url = "";

void setup() {
  Serial.begin(115200);
  delay(2000);
  Serial.print("Connecting to ");
  Serial.println(ssid);
   
  WiFi.begin(ssid, password);
   
  while (WiFi.status() != WL_CONNECTED) {
    delay(700);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  pinMode (echo, INPUT);
  pinMode (trigger, OUTPUT);
}

void loop() {
  if (WiFi.status()== WL_CONNECTED){
  // put your main code here, to run repeatedly:
  digitalWrite (trigger, LOW);
  delayMicroseconds (2);

  digitalWrite (trigger, HIGH);
  delayMicroseconds (10);

  digitalWrite (trigger, LOW);
  duration = pulseIn (echo, HIGH);

  distance = duration/58.2;
  
  Serial.print("Jarak = ");
  Serial.println (distance);
  
        HTTPClient http;
        url = "http://192.168.100.100/testing/send.php?ultra=";
        http.begin( url + (String)distance );
        http.addHeader("Content-Type", "text/plain");
        int httpResponseCode = http.POST("test=POSTING from ESP8266");
        if(httpResponseCode>0){
          String response = http.getString();
          Serial.println(response);
        } else {
          Serial.print("Error on sending POST: ");
         Serial.println(httpResponseCode);
        }
}
delay(2000);
}
