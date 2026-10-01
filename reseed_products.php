<?php
require_once 'config.php';

// Wipe existing products
$conn->exec("TRUNCATE TABLE products");

$products = [
    // IT & Office Equipment
    [
        'Laptops & Business Notebooks', 
        'it-office', 
        'Computers', 
        "Our high-performance corporate ultrabooks are designed specifically for demanding professional workflows. Featuring the latest generation multi-core processors, expanded RAM capacities, and ultra-fast NVMe SSD storage, these notebooks ensure that your team can multitask seamlessly. The sleek, durable chassis provides enterprise-grade security features including biometric login and hardware encryption. Whether you're in the office or working remotely, these business notebooks deliver uncompromised reliability and battery life.", 
        'Sleek corporate ultrabook open on a clean desk.jpg'
    ],
    [
        'Desktop Workstations', 
        'it-office', 
        'Computers', 
        "Designed for heavy-duty corporate environments, our dual-monitor desktop computer setups maximize productivity. The package includes slim CPU casings that save desk space without sacrificing performance, paired with high-definition, anti-glare displays. Complete with wireless ergonomic peripherals, these workstations are pre-configured for rapid deployment in your office network, ensuring a clean and wire-free desk setup.", 
        'Dual-monitor desktop computer setup with slim CPU casing and wireless peripherals.jpg'
    ],
    [
        'Computer Peripherals', 
        'it-office', 
        'Accessories', 
        "We supply a comprehensive range of standard office computer peripherals. This includes tactile office keyboards, high-precision optical mice, secure USB flash drives, and high-capacity external hard drives. Our peripherals are rigorously tested for durability and compatibility across all major operating systems, providing your staff with reliable tools for everyday data input and secure storage.", 
        'High-angle flat lay of standard office keyboards, optical mice, USB flash drives, and external hard drives.jpg'
    ],
    [
        'Executive Seating', 
        'it-office', 
        'Furniture', 
        "Elevate your office aesthetic and comfort with our premium high-back black leather ergonomic executive office chairs. Engineered for maximum lumbar support, these chairs feature adjustable tension control, multi-angle tilt locking, and padded armrests. The premium synthetic leather is both durable and breathable, ensuring long-lasting comfort during extended boardroom meetings or long hours at the desk.", 
        'High-back black leather ergonomic executive office chair.jpg'
    ],
    [
        'Heavy-Duty Photocopiers', 
        'it-office', 
        'Printers', 
        "Our large floor-standing enterprise multi-function office printing and scanning stations are the workhorses of any modern corporate document center. Capable of high-speed duplex printing, automated document feeding, and network scanning to email, these machines dramatically reduce queue times. They also feature advanced user authentication to ensure sensitive documents remain secure.", 
        'Large floor-standing enterprise multi-function office printing and scanning station.jpg'
    ],

    // Orthopaedic, Mobility & Assistive Devices
    [
        'Lumbar Support Belt', 
        'ortho', 
        'Braces', 
        "The Dynastrap lumbar support belt is expertly designed to provide targeted compression and stabilization to the lower back. Constructed with breathable, moisture-wicking neoprene, it offers adjustable tension straps that conform to the patient's unique anatomy. It is highly recommended for post-operative recovery, chronic back pain management, and occupational heavy lifting support, ensuring proper spinal alignment at all times.", 
        'Dynastrap lumbar support belt fitted on a model\'s lower back.png'
    ],
    [
        'Arm Sling & Immobilizer', 
        'ortho', 
        'Splints', 
        "This universal arm sling and shoulder immobilizer provides exceptional support for fractured arms, dislocated shoulders, and post-surgical recovery. Worn comfortably over clothing, the sling features adjustable padded straps to prevent neck strain and a secure body swathe that restricts unwanted shoulder movement, promoting faster and safer healing.", 
        'Universal arm sling and shoulder immobilizer worn over clothing.jpg'
    ],
    [
        'Hinged ROM Knee Brace', 
        'ortho', 
        'Braces', 
        "Our heavy-duty hinged knee brace is a state-of-the-art orthotic device featuring adjustable Range-Of-Motion (ROM) dials. This allows medical professionals to precisely control the flexion and extension limits of the knee joint during the post-operative rehabilitation phase. The brace is lined with anti-slip silicone and breathable foam, ensuring maximum patient compliance and comfort.", 
        'Heavy-duty hinged knee brace and adjustable range-of-motion (ROM) post-op knee brace.jpg'
    ],
    [
        'Adjustable Underarm Crutches', 
        'ortho', 
        'Mobility', 
        "These standard push-button adjustable aluminum underarm crutches are lightweight yet highly durable, capable of supporting significant weight capacities. They feature high-density foam underarm pads and ergonomic hand grips to reduce friction and fatigue. The push-button height adjustment mechanism ensures a custom fit for patients of various heights, while the heavy-duty rubber ferrules provide excellent traction on smooth hospital floors.", 
        'Standard push-button adjustable aluminum underarm crutches.jpg'
    ],
    [
        'Pediatric CP Wheelchair', 
        'ortho', 
        'Wheelchairs', 
        "Specifically engineered for pediatric patients with Cerebral Palsy (CP), this specialized tilt-in-space wheelchair offers unparalleled postural support. It features adjustable lateral trunk supports, an ergonomic headrest, and a tilt mechanism that helps redistribute pressure and improve digestion and respiration. The robust frame and heavy-duty casters ensure smooth mobility both indoors and outdoors.", 
        'Pediatric cerebral palsy  tilt-in-space wheelchair with lateral trunk supports and headrest.jpg'
    ],

    // Patient Care, Clinical & Bathroom Safety
    [
        'Adjustable Hospital Bed', 
        'patient-care', 
        'Hospital', 
        "Our multi-function adjustable hospital beds are essential for premium patient care facilities. They feature collapsible aluminum side rails for patient safety, smooth mechanical crank handles for adjusting the head and foot elevations, and lockable heavy-duty caster wheels. Each bed comes with a high-density medical-grade mattress that is waterproof, anti-bacterial, and designed to prevent pressure ulcers.", 
        'Multi-function adjustable hospital bed with collapsible aluminum side rails, crank handles, and mattress.jpg'
    ],
    [
        '3-in-1 Bedside Commode', 
        'patient-care', 
        'Bathroom Safety', 
        "The Pico 3-in-1 bedside commode is a versatile patient care solution that functions as a bedside commode, a raised toilet seat, and a shower chair. Constructed from rust-resistant aluminum, it features comfortable armrests for safe transfers, a removable pail with a lid, and slip-resistant rubber tips. It is lightweight and easy to clean, making it ideal for both hospital and home care environments.", 
        'Pico 3-in-1 bedside commode shower chair with armrests.jpg'
    ],
    [
        'Paramedic Trauma Bag', 
        'medical-equipment', 
        'Emergency', 
        "This bright red paramedic emergency medical responder trauma bag is designed for rapid deployment in critical situations. The bag features organized internal transparent compartments, allowing first responders to instantly locate necessary supplies. Made from heavy-duty, water-resistant canvas with reflective striping, it ensures durability and visibility in chaotic emergency scenes.", 
        'Bright red paramedic emergency medical responder trauma bag with organized internal transparent compartments.jpg'
    ],
    [
        'CSSD Autoclave Chamber', 
        'medical-equipment', 
        'Sterilization', 
        "Our hospital CSSD autoclave sterilization chamber provides hospital-grade steam sterilization for surgical instruments and medical textiles. Featuring programmable sterilization cycles, a digital monitoring interface, and a high-capacity stainless steel chamber, this unit guarantees the complete eradication of pathogens. It is a critical component for maintaining strict infection control protocols in any modern healthcare facility.", 
        'Hospital CSSD autoclave sterilization autoclave chamber.jpg'
    ]
];

$stmt = $conn->prepare("INSERT INTO products (name, department, category, description, image_filename) VALUES (?, ?, ?, ?, ?)");

foreach ($products as $p) {
    $stmt->execute($p);
}

echo "Products re-seeded successfully!";
?>
