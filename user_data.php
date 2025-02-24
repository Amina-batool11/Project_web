<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Note Form</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #0072ff;
            text-align: center;
            font-size: 24px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            transition: all 0.3s;
        }

        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: #0072ff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 114, 255, 0.5);
        }

        .form-group textarea {
            resize: none;
            height: 100px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #0072ff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            transition: background 0.3s, transform 0.2s;
        }

        .submit-btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .phone-container {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .phone-container span {
            background: #eaeaea;
            padding: 12px;
            border-right: 1px solid #ccc;
            border-radius: 6px 0 0 6px;
            font-size: 14px;
            color: #555;
        }

        .phone-container input {
            border: none;
            border-radius: 0 6px 6px 0;
            flex: 1;
            padding: 12px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .phone-container input:focus {
            outline: none;
            box-shadow: none;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Delivery Note Form</h2>
        <form action="submit_form.php" method="POST">
            <div class="form-group">
                <label for="deliver-to">Name</label>
                <input type="text" id="deliver-to" name="deliver_to" placeholder="Enter recipient's name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="Enter city" required>
                </div>
                <div class="form-group">
                    <label for="postal-code">Postal / Zip Code</label>
                    <input type="text" id="postal-code" name="postal_code" placeholder="Enter postal code" required>
                </div>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="Pakistan" selected>Pakistan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <div class="phone-container">
                    <span>+92</span>
                    <input type="tel" id="phone" name="phone" placeholder="300 1234567" pattern="[0-9]{3} [0-9]{7}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter description of the delivery" required></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" placeholder="Enter quantity" required>
            </div>
            <div class="form-group">
                <label for="date">Date of Delivery</label>
                <input type="date" id="date" name="date" style="padding: 9px;" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>