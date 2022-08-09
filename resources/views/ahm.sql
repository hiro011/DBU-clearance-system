
INSERT INTO `user_logins` (`ID_no`, `name`, `email`, `password`, `role`, `add_by`) VALUES
('00567', 'KIDANU	ADERA', 'adera@gmail.com', '1234kid', 'Officer', 'Ahmed Mehamedyesuf'),
('00605', 'DEGNET	GONCHE', 'gonchie@gmail.com', '1234deg', 'Officer', 'Ahmed Mehamedyesuf'),
('00607', 'BINIAM	EMEYE', 'emeye@gmail.com', '1234bin', 'Officer', 'Ahmed Mehamedyesuf'),
('00611', 'GURSHA	BELETF', 'beletf@gmail.com', '1234gur', 'Officer', 'Ahmed Mehamedyesuf'),
('00635', 'ASEBELIGN	CHEBUD', 'chebud@gmail.com', '1234ase', 'Officer', 'Ahmed Mehamedyesuf'),
('00641', 'DEJEN	KEBEDE', 'kebede@gmail.com', '1234dej', 'Officer', 'Ahmed Mehamedyesuf'),
('00654', 'GETINET	ZEWUDIE', 'zewudie@gmail.com', '1234get', 'Officer', 'Ahmed Mehamedyesuf');

 

INSERT INTO `distance_studs` (`ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`) VALUES
('00663', 'ABRHAM BEKELE', 'Male', 4, 'Computing', 'Computer Science', 'on class'),
('00692', 'BIRHANU NIGUSE', 'Male', 3, 'Law', 'Law', 'on class'),
('00857', 'BZUAYEHU ASEGIDEW', 'Male', 2, 'Business', 'Acounting', 'on class'),	
('00911', 'NIBRET AWOKE', 'Male', 3, 'Agriculture', 'Agriculture Economics', 'on class'),
('00988', 'GELENA GEZMU', 'Male', 2, 'Social-Science', 'English', 'on class'),
('00441', 'ABEBAW HAYMANOT', 'Male', 3, 'Computational', 'Physics', 'on class');

INSERT INTO `extension_studs` (`ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`) VALUES
('00578', 'KASSAHUN MENGIE', 'Male', 4, 'Computing', 'Software Engineering', 'on class'),
('00808', 'ATEFRACHEW SEYFU', 'Male', 2, 'Business', 'Management', 'on class'),
('00981', 'WENDU KEMAL', 'Male', 3, 'Agriculture', 'Animal  Science', 'on class'),
('01309', 'BELETE BELACHEW', 'Male', 1, 'Freshman', 'Social Freshman', 'on class'),
('02157', 'MELKAMU DERSO', 'Male', 3, 'Social-Science', 'Civics', 'on class'),
('02220', 'SILESH ALAMIR', 'Male', 2, 'Computational', 'Physics', 'on class');

 

INSERT INTO `regular_studs` (`ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`) VALUES
('00310', 'ZINABU ABAY', 'Male', 2, 'Computational', 'Biology', 'on class'),
('00326', 'DANIAL MEBRAHTU', 'Male', 2, 'Computational', 'Mathematics', 'on class'),
('00359', 'ABRHAM GIRMAY', 'Male', 3, 'Agriculture', 'Horticulture', 'on class'),
('00378', 'KIFLOM KIDANEMARIAM', 'Male', 3, 'Agriculture', 'Plant Science', 'on class'),
('00383', 'BIRHANU GADISA', 'Male', 4, 'Computing', 'Information Technology', 'on class'),
('00393', 'ROBEL MELAKE', 'Male', 5, 'Engineering', 'Chemical Engineering', 'on class'),
('00397', 'ASKEBREW	AGEGNEHU', 'Male', 4, 'Social-Science', 'History', 'on class'),
('00417', 'JEMAL MEHAMED', 'Male', 4, 'Computing', 'Information System', 'on class'),
('00419', 'WONDIYFRAW ALEMIE', 'Male', 5, 'Engineering', 'Industrial Engineering', 'on class'),
('00422', 'DESTAW GEDAMU', 'Male', 2, 'Business', 'Economics', 'on class'),
('00424', 'GETNET GIRMA', 'Male', 1, 'Freshman', 'Social Freshman', 'on class'),
('00427', 'YENEW TAMIR', 'Male', 2, 'Business', 'Logistics', 'on class'),
('01129', 'HAFTOM TEKLAY', 'Male', 1, 'Freshman', 'Natural Freshman', 'on class');
 
INSERT INTO `employees` (`ID_no`, `name`, `gender`, `birth_date`, `employee_type`, `guarentor_name`, `guarentor_phone`, `level_of_education`, `job_title`, `age`, `salary`) VALUES
('00464', 'ANDUALEM ENYEW', 'ANDUALEM ENYEW', '1990-04-05', 'Teacher', 'seid ali', 956233556, 'Bachelor', teacher, 32, NULL);
('00464', 'ANDUALEM ENYEW', 'ANDUALEM ENYEW', '1990-04-05', 'Teacher', 'seid ali', 956233556, 'Bachelor', teacher, 32, NULL);


INSERT INTO `admin_staff` (`ID_no`, `name`, `gender`, `college`, `department`, `status`) VALUES
( '00002', 'testHRM', 'unspecified', 'Directorate', 'HRM', 'Ahmed Mehamedyesuf'),
( '00003', 'testLibrary', 'Male', 'Directorate', 'Library', 'Ahmed Mehamedyesuf'),
( '00004', 'testRegistrar', 'unspecified', 'Directorate', 'Registrar', 'Ahmed Mehamedyesuf'),
( '00005', 'testDining', 'unspecified', 'Directorate', 'Dining', 'Ahmed Mehamedyesuf'),
('00343', 'HAGOS	FISAHA', 'Male', 'Engineering', 'Electrical & Computer Engineering', 'Ahmed Mehamedyesuf'),
('00513', 'MARU WUBENEH', 'Male', 'Directorate', 'Registrar', 'Ahmed Mehamedyesuf'),
('00519', 'GIRMA	ANIMUT', 'Male', 'Directorate', 'Library', 'Ahmed Mehamedyesuf'),
('00529', 'YENESEW	MULUNEH', 'Male', 'Directorate', 'StudResidence', 'Ahmed Mehamedyesuf'),
('00530', 'YIHUN	YIMENU', 'Male', 'Directorate', 'Dining', 'Ahmed Mehamedyesuf'),
('00561', 'WENDMAYEWU	ASMARE', 'Male', 'Directorate', 'EngCollege Finance', 'Ahmed Mehamedyesuf'),
('00563', 'BEAKAL	MITIKU', 'Male', 'Directorate', 'HRM', 'Ahmed Mehamedyesuf'),
( '00567', 'KIDANU	ADERA', 'Male', 'Directorate', 'Anti Corruption', 'Ahmed Mehamedyesuf'),
('00570', 'MULUKEN JEMERE', 'Male', 'Engineering', 'Mechanical  Engineering', 'Ahmed Mehamedyesuf'),
( '00605', 'DEGNET	GONCHE', 'Male', 'Directorate', 'Cashier', 'Ahmed Mehamedyesuf'),
( '00607', 'BINIAM	EMEYE', 'Male', 'Directorate', 'Finance', 'Ahmed Mehamedyesuf'),
( '00611', 'GURSHA	BELETF', 'Male', 'Directorate', 'ICT Property', 'Ahmed Mehamedyesuf'),
('00635', 'ASEBELIGN	CHEBUD', 'Male', 'Directorate', 'Research', 'Ahmed Mehamedyesuf'),
( '00641', 'DEJEN	KEBEDE', 'Male', 'Directorate', 'General Service', 'Ahmed Mehamedyesuf'),
( '00654', 'GETINET	ZEWUDIE', 'Male', 'Directorate', 'Property Officer', 'Ahmed Mehamedyesuf');

