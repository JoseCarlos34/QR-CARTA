import qrcode

url = "https://qr-carta.vercel.app/carta.php"
img = qrcode.make(url)
img.save("qr_carta.png")

print("✅ Código QR generado con la URL pública")
