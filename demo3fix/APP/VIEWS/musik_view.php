<?php
namespace App\Views;

class MusikView {
    public function displayAllInstruments($instruments) {
        echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto;'>";
        foreach ($instruments as $instrument) {
            echo "<div style='box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 20px; border-radius: 10px; background: linear-gradient(135deg, #e0f7fa, #80deea);'>";
            echo "<h2 style='color: #006064; margin-bottom: 10px;'>" . htmlspecialchars($instrument->getNama()) . "</h2>";
            echo "<p style='font-size: 1.1em; margin: 5px 0;'><strong>Jenis:</strong> " . htmlspecialchars($instrument->getJenis()) . "</p>";
            echo "<p style='font-size: 1.1em; margin: 5px 0;'><strong>Pemilik:</strong> " . htmlspecialchars($instrument->getPemilik()) . "</p>";
            echo "<div style='margin-top: 15px; padding: 10px; background-color: #e0f2f1; border-radius: 8px; color: #004d40; font-style: italic;'>";
            $instrument->mainkan();
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
}
