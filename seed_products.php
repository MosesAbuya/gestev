<?php
require_once 'config.php';

$products = [
    // IT & Office Equipment
    ['Laptops & Business Notebooks', 'it-office', 'Computers', 'High-performance corporate ultrabooks designed for professional workflows.', 'Sleek corporate ultrabook open on a clean desk.jpg'],
    ['Desktop Workstations', 'it-office', 'Computers', 'Dual-monitor desktop computer setups with slim CPU casings and wireless peripherals.', 'Dual-monitor desktop computer setup with slim CPU casing and wireless peripherals.jpg'],
    ['Computer Peripherals', 'it-office', 'Accessories', 'Standard office keyboards, optical mice, USB flash drives, and external hard drives.', 'High-angle flat lay of standard office keyboards, optical mice, USB flash drives, and external hard drives.jpg'],
    ['Executive Seating', 'it-office', 'Furniture', 'High-back black leather ergonomic executive office chairs for maximum comfort.', 'High-back black leather ergonomic executive office chair.jpg'],
    ['Reception & Workstations', 'it-office', 'Furniture', 'Modern curved wooden corporate reception desks and modular office cubicles.', 'Modern curved wooden corporate reception desk and modular 4-pod office cubicles.jpg'],
    ['Filing Supplies', 'it-office', 'Stationery', 'Colorful lever-arch box files and spring suspension files organized on office shelving.', 'Colorful lever-arch box files and spring suspension files organized on office shelving.jpg'],
    ['Heavy-Duty Photocopiers', 'it-office', 'Printers', 'Large floor-standing enterprise multi-function office printing and scanning stations.', 'Large floor-standing enterprise multi-function office printing and scanning station.jpg'],

    // Orthopaedic, Mobility & Assistive Devices
    ['Spinal & Neck Support', 'ortho', 'Braces', 'Dynastrap lumbar support belts, Clavicle figure-8 braces, and SOMI braces.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'], // Using placeholder
    ['Upper Limb Splints', 'ortho', 'Splints', 'Universal arm slings, resting hand splints, and Moulded wrist-hand-thumb spica splints.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Lower Limb Support', 'ortho', 'Braces', 'Heavy-duty hinged knee braces, adjustable ROM knee braces, and drop foot splints.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Footcare Products', 'ortho', 'Footcare', 'Silicone gel toe spreaders, buttress crest pads, and blue-dot silicone heel shock cups.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Prosthetics', 'ortho', 'Prosthetics', 'Transtibial below-knee modular prosthesis showing socket, pylon pipe, and foot.', 'Transtibial below-knee modular prosthesis showing socket, pylon pipe, and foot .jpg'],
    ['Walking Aids & Crutches', 'ortho', 'Mobility', 'Standard push-button adjustable aluminum underarm crutches and ergonomic forearm crutches.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Wheelchairs & Seating', 'ortho', 'Wheelchairs', 'Pediatric cerebral palsy (CP) tilt-in-space wheelchair with lateral trunk supports and headrest.', 'Pediatric cerebral palsy  tilt-in-space wheelchair with lateral trunk supports and headrest.jpg'],

    // Patient Care, Clinical & Bathroom Safety Equipment
    ['Bathroom Safety Commodes', 'patient-care', 'Bathroom', 'Pico 3-in-1 bedside commode / shower chair with armrests and mobile taxi commodes.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Hospital Beds', 'patient-care', 'Hospital', 'Multi-function adjustable hospital beds with collapsible aluminum side rails.', 'Multi-function adjustable hospital bed with collapsible aluminum side rails, crank handles, and mattress.jpg'],
    ['Emergency Medical Bags', 'medical-equipment', 'Emergency', 'Bright red paramedic trauma bags with organized internal transparent compartments.', 'Business team in professional attire reviewing contracts, blueprints, or catalogs around a conference table.jpg'],
    ['Sterilization Equipment', 'medical-equipment', 'Clinical', 'Hospital CSSD autoclave / sterilization autoclave chamber.', 'Hospital CSSD autoclave sterilization autoclave chamber.jpg']
];

$stmt = $conn->prepare("INSERT INTO products (name, department, category, description, image_filename) VALUES (?, ?, ?, ?, ?)");

foreach ($products as $p) {
    // Check if it exists to avoid duplicates
    $check = $conn->prepare("SELECT id FROM products WHERE name = ?");
    $check->execute([$p[0]]);
    if ($check->rowCount() == 0) {
        $stmt->execute($p);
    }
}

echo "Products seeded successfully!";
?>
