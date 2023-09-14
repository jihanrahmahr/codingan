#include <WiFi.h>
#include <HTTPClient.h>

const char* ssid = "bbygurl"; // Nama WiFi
const char* password = "1234567890"; // Password WiFi
const char* serverAddress = "http://172.20.10.7:8080/turbidinity/api.php";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  // Mengambil data dari sensor, misalnya:
  float sensorValue = 12.34; // Gantilah dengan nilai sensor Anda

  // Membuat objek HTTPClient
  HTTPClient http;

  // Membuat JSON payload dengan data yang akan dikirim
  String payload = "{\"sensor_data\":" + String(sensorValue) + "}";

  // Mengirim permintaan POST ke server PHP
  http.begin(serverAddress);
  http.addHeader("Content-Type", "application/json");

  int httpResponseCode = http.POST(payload);

  if (httpResponseCode > 0) {
    String response = http.getString();
    Serial.println("HTTP Response code: " + String(httpResponseCode));
    Serial.println("Response: " + response);
  } else {
    Serial.println("Error on sending POST request.");
  }

  http.end();

  // Menunggu sebelum mengirim data selanjutnya
  delay(1000);
}
