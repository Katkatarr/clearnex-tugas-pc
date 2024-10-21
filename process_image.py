import cv2
import numpy as np
from matplotlib import pyplot as plt
from matplotlib.widgets import Button
import sys
import os

# Mendapatkan path gambar dari argumen
image_path = sys.argv[1]

# Membaca citra yang diupload
image = cv2.imread(image_path, cv2.IMREAD_GRAYSCALE)

# Menerapkan filter rata-rata (average filter) untuk mengurangi noise
kernel_size = (5, 5)
average_filtered_image = cv2.blur(image, kernel_size)

# Menerapkan filter median untuk mengurangi noise
median_filtered_image = cv2.medianBlur(image, 5)

# Simpan gambar hasil proses
average_image_path = 'storage/app/public/average_filtered_image.jpg'
median_image_path = 'storage/app/public/median_filtered_image.jpg'
cv2.imwrite(average_image_path, average_filtered_image)
cv2.imwrite(median_image_path, median_filtered_image)

# Fungsi untuk mengunduh gambar (membuka file hasil)
def download_average(event):
    os.startfile(average_image_path)  # Opens the file, simulating a download

def download_median(event):
    os.startfile(median_image_path)  # Opens the file, simulating a download

# Menampilkan hasil
fig, axs = plt.subplots(1, 3, figsize=(15, 8))

# Tampilkan gambar asli
axs[0].imshow(image, cmap='gray')
axs[0].set_title('Original Image with Noise')
axs[0].axis('off')

# Tampilkan gambar hasil average filtering
axs[1].imshow(average_filtered_image, cmap='gray')
axs[1].set_title('Average Filtered Image')
axs[1].axis('off')

# Tampilkan gambar hasil median filtering
axs[2].imshow(median_filtered_image, cmap='gray')
axs[2].set_title('Median Filtered Image')
axs[2].axis('off')

plt.show()