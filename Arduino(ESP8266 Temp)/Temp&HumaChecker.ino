#include <ESP8266WiFiMulti.h>

#include <DHT.h>

#include <ESP8266WiFi.h>

#include <WiFiClient.h>

#include <ESP8266HTTPClient.h>

DHT dht;
HTTPClient http;
WiFiClient client;
ESP8266WiFiMulti WiFiMulti;

void setup() {
  Serial.begin(9600);
  WiFiMulti.addAP("3BB-Theerapat_2.4GHz", "25492549");
  pinMode(BUILTIN_LED, OUTPUT);
  dht.setup(D1);
}
void loop() {
  if ((WiFiMulti.run() == WL_CONNECTED)) {
    digitalWrite(BUILTIN_LED , LOW);
    http.begin(client ,"http://192.168.1.23:3000/");  //HTTP http://192.168.1.23:3000
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    String postData = "Temp=" + String(dht.getTemperature());
    int httpCode = http.POST(postData);
    
    Serial.println("Http Code is " + String(httpCode));
    Serial.println(dht.getTemperature());
    http.end();
  }
  delay(1000);
}