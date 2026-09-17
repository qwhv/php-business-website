CREATE DATABASE business_website;

USE business_website;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE banners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    button_text VARCHAR(100) NOT NULL,
    button_link VARCHAR(255) NOT NULL
);

CREATE TABLE features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE statistics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(50),
    count INT,
    title VARCHAR(100),
    description VARCHAR(255)
);

CREATE TABLE about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    p1 TEXT NOT NULL,
    p2 TEXT NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE about_ul_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    about_id INT,
    list_item TEXT NOT NULL,
    FOREIGN KEY (about_id) REFERENCES about(id)
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(50) NOT NULL
);

CREATE TABLE bioServices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    h2 VARCHAR(255) NOT NULL,
    p1 TEXT NOT NULL,
    image VARCHAR(255),
    h3 TEXT NOT NULL,
    p2 TEXT NOT NULL
);

CREATE TABLE ourServices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(255) NOT NULL,
    skill_level INT NOT NULL
);

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    twitter VARCHAR(255),
    facebook VARCHAR(255),
    instagram VARCHAR(255),
    linkedin VARCHAR(255)
);

CREATE TABLE contact_box (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    value VARCHAR(255),
    icon VARCHAR(255)
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('no_checked', 'checked') DEFAULT 'no_checked',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    price VARCHAR(255) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
);

CREATE TABLE product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

-- ==============================  
-- 📥 DATA INSERTION (COMPLETE)  
-- ==============================  
-- DEFAULT PASSWORD: "IQBOLSHOH" (HASHED FOR SECURITY)  
-- ==============================  

INSERT INTO
    users (name, username, password)
VALUES
    (
        'MOON',
        'moon',
        '52be5ff91284c65bac56f280df55f797a5c505f7ef66317ff358e34791507027'
    );

INSERT INTO
    about (title, p1, p2, image)
VALUES
    (
        'خدماتنا',
        'نسعى في شركة MOON دائمًا إلى تحقيق أفضل النتائج، ونطوّر مهاراتنا باستمرار لنقدم لعملائنا حلولًا تقنية وإبداعية فعّالة.',
        'نبني شراكات طويلة الأمد وموثوقة مع عملائنا، ونحوّل أفكارهم إلى نجاح ملموس.',
        'assets/img/about.jpg'
    );

INSERT INTO
    about_ul_items (about_id, list_item)
VALUES
    (
        1,
        'نقدم خدمات عالية الجودة ونحرص على تلبية احتياجات عملائنا.'
    ),
    (
        1,
        'نطوّر حلولًا مبتكرة ونستخدم أحدث التقنيات.'
    ),
    (
        1,
        'نتعامل مع كل مشروع بشكل مستقل ونقدم حلولًا مخصصة.'
    ),
    (
        1,
        'يساعد فريقنا المتخصص في حل مختلف التحديات.'
    ),
    (
        1,
        'فريق الدعم لدينا متاح دائمًا لخدمة عملائنا.'
    ),
    (
        1,
        'نرتقي بجودة خدماتنا من خلال أساليب مبتكرة.'
    ),
    (
        1,
        'نضع استراتيجيات مميزة تناسب كل مشروع.'
    ),
    (
        1,
        'نساعد عملاءنا على اكتشاف فرص جديدة للنمو.'
    );

INSERT INTO
    banners (
        image,
        title,
        description,
        button_text,
        button_link
    )
VALUES
    (
        'hero-carousel-1.jpg',
        'مرحبًا بكم في MOON',
        'حلول التقنية والدعاية والإعلان',
        'اكتشف خدماتنا',
        'about.php'
    ),
    (
        'hero-carousel-2.jpg',
        'طوّر أعمالك مع MOON',
        'نحوّل الأفكار الجديدة إلى حلول إبداعية تساهم في نمو أعمالك.',
        'اكتشف خدماتنا',
        'about.php'
    ),
    (
        'hero-carousel-3.jpg',
        'حلولنا بين يديك',
        'نقدم لك أفضل الحلول التقنية والتسويقية بجودة عالية.',
        'اكتشف خدماتنا',
        'about.php'
    );

INSERT INTO
    bioServices (h2, p1, image, h3, p2)
VALUES
    (
        'خدماتنا',
        'تساعدنا خبرتنا ومهاراتنا على تقديم حلول مميزة تلبي احتياجاتك.',
        'skills.jpg',
        'خبراتنا التقنية والإبداعية',
        'نستخدم التقنيات الحديثة لصناعة حلول ومنتجات مميزة.'
    );

INSERT INTO
    category (category_name)
VALUES
    ('تطبيقات'),
    ('حلول تقنية'),
    ('هوية بصرية'),
    ('تصميمات');

INSERT INTO
    contact (twitter, facebook, instagram, linkedin)
VALUES
    (
        'iqbolshoh_777',
        '',
        'iqbolshoh_777',
        'iiqbolshoh'
    );

INSERT INTO
    contact_box (title, value, icon)
VALUES
    ('العنوان', 'اليمن، إب، الجبانة السفلى', 'bi bi-geo-alt'),
    (
        'الهاتف',
        '+967773143853 - +967771949917',
        'bi bi-telephone'
    ),
    (
        'البريد الإلكتروني',
        'lood71117@gmail.com',
        'bi bi-envelope'
    );

INSERT INTO
    features (icon, title, description)
VALUES
    (
        'bi bi-bounding-box-circles',
        'حلول مبتكرة',
        'نقدم حلولًا مبتكرة تساعد على تطوير أعمالك.'
    ),
    (
        'bi bi-calendar4-week',
        'استشارات مجانية',
        'احصل على استشارة مجانية من خبرائنا وابدأ النمو.'
    ),
    (
        'bi bi-broadcast',
        'شبكة قوية',
        'استفد من فرص عديدة عبر شبكة علاقاتنا وخبراتنا.'
    );

INSERT INTO
    ourServices (service_name, skill_level)
VALUES
    ('تطوير المواقع', 90),
    ('تطوير التطبيقات', 85),
    ('الأمن السيبراني', 80),
    ('قواعد البيانات', 95),
    ('تصميم واجهات المستخدم', 75);

INSERT INTO
    products (category_id, product_name, description, price)
VALUES
    (
        1,
        'تطبيق 1',
        'حل تقني مبتكر من MOON',
        '300'
    ),
    (
        2,
        'حل تقني 1',
        'حل رقمي مصمم لتطوير أعمالك',
        '400'
    ),
    (
        3,
        'هوية بصرية 1',
        'تصميم هوية بصرية تعكس قوة علامتك التجارية',
        '500'
    ),
    (
        4,
        'تصميم 1',
        'تصميم إبداعي بجودة احترافية',
        '600'
    ),
    (
        1,
        'تطبيق 2',
        'حل تقني مبتكر من MOON',
        '350'
    ),
    (
        2,
        'حل تقني 2',
        'حل رقمي مصمم لتطوير أعمالك',
        '450'
    ),
    (
        3,
        'هوية بصرية 2',
        'تصميم هوية بصرية تعكس قوة علامتك التجارية',
        '550'
    ),
    (
        4,
        'تصميم 2',
        'تصميم إبداعي بجودة احترافية',
        '650'
    ),
    (
        1,
        'تطبيق 3',
        'حل تقني مبتكر من MOON',
        '370'
    ),
    (
        2,
        'حل تقني 3',
        'حل رقمي مصمم لتطوير أعمالك',
        '470'
    ),
    (
        3,
        'هوية بصرية 3',
        'تصميم هوية بصرية تعكس قوة علامتك التجارية',
        '570'
    ),
    (
        4,
        'تصميم 3',
        'تصميم إبداعي بجودة احترافية',
        '670'
    );

INSERT INTO
    product_images (product_id, image_url)
VALUES
    (1, 'app-1.jpg'),
    (2, 'product-1.jpg'),
    (3, 'branding-1.jpg'),
    (4, 'books-1.jpg'),
    (5, 'app-2.jpg'),
    (6, 'product-2.jpg'),
    (7, 'branding-2.jpg'),
    (8, 'books-2.jpg'),
    (9, 'app-3.jpg'),
    (10, 'product-3.jpg'),
    (11, 'branding-3.jpg'),
    (12, 'books-3.jpg'),
    (1, 'app-1.jpg'),
    (1, 'product-1.jpg'),
    (1, 'branding-1.jpg');

INSERT INTO
    services (title, description, icon)
VALUES
    (
        'خدماتنا',
        'نقدم حلولًا مخصصة لكل عميل. اكتشف خدماتنا الموثوقة والفعّالة.',
        'bi-activity'
    ),
    (
        'حلول مخصصة',
        'نصمم خدماتنا لتلبية احتياجات كل عميل ونقدم الحل الأنسب لك.',
        'bi-broadcast'
    ),
    (
        'أساليب مبتكرة',
        'نحل تحدياتك بأساليب مبتكرة ونقدم حلولًا إبداعية في كل خدمة.',
        'bi-easel'
    ),
    (
        'خدمات سريعة وفعّالة',
        'خدماتنا سريعة وفعّالة مع تركيز كبير على الجودة واحتياجاتك.',
        'bi-bounding-box-circles'
    ),
    (
        'استشارات متخصصة',
        'خبراؤنا مستعدون لتقديم أفضل الاستشارات والإجابة عن استفساراتك.',
        'bi-calendar4-week'
    ),
    (
        'التواصل مع العملاء',
        'نحرص على تواصل واضح وودّي مع عملائنا، فآراؤكم واقتراحاتكم مهمة لنا.',
        'bi-chat-square-text'
    );

INSERT INTO
    statistics (icon, count, title, description)
VALUES
    (
        'bi bi-emoji-smile',
        232,
        'عملاء سعداء',
        'سر نجاحنا'
    ),
    (
        'bi bi-journal-richtext',
        521,
        'مشاريع منجزة',
        'إبداعنا'
    ),
    (
        'bi bi-headset',
        1453,
        'ساعات الدعم',
        'نحن دائمًا إلى جانب عملائنا'
    ),
    (
        'bi bi-people',
        32,
        'أعضاء الفريق',
        'فريقنا المتخصص'
    );

INSERT INTO
    messages (name, email, subject, message, status)
VALUES
    (
        'Aliya Karimova',
        'aliya.karimova@example.com',
        'مشروع جديد',
        'مرحبًا، أرغب في التعاون معكم في مشروع جديد. يرجى إبلاغي بإمكانية مناقشة التفاصيل.',
        'no_checked'
    ),
    (
        'Shodmon Abdurahimov',
        'shodmon.abdurahimov@example.com',
        'طلب مراجعة',
        'مرحبًا، هل يمكنكم مراجعة عملي الأخير وتقديم ملاحظاتكم؟',
        'no_checked'
    ),
    (
        'Kamola Ergasheva',
        'kamola.ergasheva@example.com',
        'طلب مساعدة',
        'أحتاج إلى مساعدة في استخدام خدماتكم. هل يمكنكم إرشادي؟',
        'no_checked'
    ),
    (
        'Farhod Yusupov',
        'farhod.yusupov@example.com',
        'استفسار عن شراكة',
        'أتواصل معكم لبحث إمكانية التعاون والشراكة بين فريقينا. أتطلع إلى ردكم.',
        'no_checked'
    );
