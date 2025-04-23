# CropSense 🌾

**Empowering Farmers with AI-driven Agriculture Solutions**

CropSense is a comprehensive web-based platform designed to assist farmers with precision agriculture tools. It combines machine learning models for yield prediction, disease detection, and market intelligence, integrated into a user-friendly web and mobile interface.

---

## 🔧 Features

### 🎯 Core Modules
- **Crop Yield Prediction**: Uses LightGBM models for accurate yield forecasting based on historical data.
- **Plant Disease Detection**: Deep learning model (CNN) trained with TensorFlow/Keras on crop disease datasets.
- **Market Price Insights**: Displays real-time market pricing and trend analysis.
- **Weather Advisory**: Weather updates tailored to the crop and region.
- **Knowledge Sharing**: Blogs and FAQ section for agricultural tips and discussion.

### 📦 Backend (Flask)
- `/app.py`: API endpoints for model inference.
- Pretrained models: `model.pkl`, `lightgbm_yp.pkl`, `plant_disease.h5`
- Requirements defined in `requirements.txt` and `runtime.txt`

### 🌐 Frontend (PHP + JS + HTML/CSS)
- Auth system: Login, Signup, Profile management
- Market system: View products, upload products, buy/sell tools
- Blog system: Write, view and discuss posts
- Agriculture visuals, FAQs, Weather UI, and video resources

### 🗃️ Database
- MySQL database schema: `agroculture.sql`

---

## 📁 Project Structure

```
CropSense/
│
├── Backend/
│   ├── app.py
│   ├── *.pkl, *.h5
│   ├── requirements.txt
│
├── Frontend/
│   ├── index.php, blogWrite.php, market.php, etc.
│   ├── css/, js/, images/, fonts/, weather/
│   ├── templates/, public/, utils/
│   └── agroculture.sql
│
├── Supplements/
│   ├── Bihar_Yields_modified.csv, crop_production.csv, etc.
│
├── README.md
├── LICENSE
└── .gitignore
```

---

## 📌 Prerequisites

- Python 3.7+ (Flask backend)
- PHP 7.4+ (Frontend server)
- Node.js (for frontend bundling if needed)
- MySQL for database
- pip install -r requirements.txt

---

## 🚀 Deployment

You can run the backend and frontend separately:

### Run Flask Backend:
```bash
cd Backend
pip install -r requirements.txt
python app.py
```

### Serve PHP Frontend:
```bash
cd Frontend
php -S localhost:8000
```

---

## 🤝 Contributors

Thanks to all contributors who helped make CropSense a success!

---

## 📜 License

This project is licensed under the MIT License
