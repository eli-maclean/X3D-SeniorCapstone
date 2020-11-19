--create table statement
CREATE TABLE `models` (
  `id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `adr` varchar(100) DEFAULT NULL,
  `x3d-loc` varchar(100) DEFAULT NULL,
  `type` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--dump table data
INSERT INTO `models` (`id`,`name`,`thumbnail`,`adr`,`x3d-loc`,`type`) VALUES
 (0,"Brain","thumbnails/brain.png","modelpages/brain.php","x3d/Brain/Brain_nocompression.x3d","decomposable"),
 (1,"Skull","thumbnails/skull.png","modelpages/skull.php","x3d/Skull/skullAssembly_noscript.x3d","decomposable"),
 (2,"Body Skin","thumbnails/bodyskin.png","modelpages/bodyskin.html","x3d/BodySkin/BodySkinIndexedFaceSetNIST.x3d","basic"),
 (3,"Chest","thumbnails/chest.png","modelpages/chest.html","x3d/Chest/BonesChest.x3d","basic"),
 (4,"Left Femur","thumbnails/femurleft.png","modelpages/femur_left.html","x3d/FemurLeft/BonesLeftFemur.x3d","basic"),
 (5,"Right Femur","thumbnails/femurright.png","modelpages/femur_right.html","x3d/FemurRight/BonesRightFemur.x3d","basic"),
 (6,"Left Foot","thumbnails/footleft.png","modelpages/foot_left.html","x3d/FootLeft/BonesLeftFoot.x3d","basic"),
 (7,"Right Foot","thumbnails/footright.png","modelpages/foot_right.html","x3d/FootRight/BonesRightFoot.x3d","basic"),
 (8,"Girdle","thumbnails/girdle.png","modelpages/girdle.html","x3d/Girdle/BonesGirdle.x3d","basic"),
 (9,"Left Hand","thumbnails/handleft.png","modelpages/hand_left.html","x3d/HandLeft/BonesLeftHand.x3d","basic"),
 (10,"Right Hand","thumbnails/handright.png","modelpages/hand_right.html","x3d/HandRight/BonesRightHand.x3d","basic"),
 (11,"Head","thumbnails/head.png","modelpages/head.html","x3d/Head/BonesHead.x3d","basic"),
 (12,"Left Humerus","thumbnails/humerusleft.png","modelpages/humerus_left.html","x3d/HumerusLeft/BonesLeftHumerus.x3d","basic"),
 (13,"Right Humerus","thumbnails/humerusright.png","modelpages/humerus_right.html","x3d/HumerusRight/BonesRightHumerus.x3d","basic"),
 (14,"Left Radius/Ulna","thumbnails/radiusulnaleft.png","modelpages/radiusUlna_left.html","x3d/RadiusUlnaLeft/BonesLeftRadiusUlna.x3d","basic"),
 (15,"Right Radius/Ulna","thumbnails/radiusulnaright.png","modelpages/radiusUlna_right.html","x3d/RadiusUlnaRight/BonesRightRadiusUlna.x3d","basic"),
 (16,"Skeleton","thumbnails/skeleton.png","modelpages/skeleton.html","x3d/Skeleton/BonesAllSkeleton.x3d","basic"),
 (17,"Top Teeth","thumbnails/teeth.png","modelpages/teeth.html","x3d/TeethTop/BonesTeethTop.x3d","basic"),
 (18,"Bottom Teeth","thumbnails/teeth.png","modelpages/teeth.html","x3d/TeethBottom/BonesTeethBottom.x3d","basic"),
 (19,"Left Tibia/Fibula","thumbnails/tibiafibulaleft.png","modelpages/tibiaFibula_left.html","x3d/TibiaFibulaLeft/BonesLeftTibiaFibula.x3d","basic"),
 (20,"Right Tibia/Fibula","thumbnails/tibiafibularight.png","modelpages/tibiaFibula_right.html","x3d/TibiaFibulaRight/BonesRightTibiaFibula.x3d","basic"),
 (21,"Maxillary","thumbnails/Maxillary.png","modelpages/Maxillary,html","x3d/Maxillary/Maxillary.x3d","basic"),
 (22,"Heart and Kidney","thumbnails/heartkidney.png","modelpages/HeartKidney.html","x3d/Heartkidney/HeartKidney.x3d","basic"),
 (23,"Mandibular","thumbnails/mandibular.png","modelpages/Mandibular.html","x3d/Mandibular/Mandibular.x3d","basic"),
 (24,"Respiratory System","thumbnails/RespiratorySystem.png","modelpages/RespiratorySystem.html","x3d/RespiratorySystem/RespiratorySystem.x3d","basic"),
 (25,"Volumetric Abdomen","thumbnails/abdomenvol.png","modelpages/abdomen_volumetric.html","x3d/abdomen_volume/BasicAbdomen.x3d","volume"),
 (26,"Volumetric Body","thumbnails/bodyvol.png","modelpages/body_volumetric.html","x3d/body_volume/BasicBody.x3d","volume"),
 (27,"Volumetric Brain","thumbnails/brainvol.png","modelpages/brain_volumetric.html","x3d/brain_volume/BasicBrain.x3d","volume"),
 (28,"Volumetric Skull","thumbnails/skullvol.png","modelpages/skull_volumetric.html","x3d/skull_volume/BasicSkull.x3d","volume");