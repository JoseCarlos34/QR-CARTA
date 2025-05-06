import qrcode

url = "http://192.168.100.15/restaurante/"
img = qrcode.make(url)
img.save("qr_carta.png")

print("✅ Código QR generado con la IP 192.168.100.15")
