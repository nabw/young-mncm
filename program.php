 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="simple.css">
<title>Young cardiac modelers</title>
</head>

  <header>
    <?php 
	$val = file_get_contents("main_header.php");
	echo $val;
    ?>
  </header>

  <main>
	  <p>The program can be found <a href="https://www.dropbox.com/s/wam8zkx0cc0iez1/program.pdf">here</a>. 

	  <hr>

	  <p> <strong>Arrieula, Andony</strong>. Universit&eacute de Bordeaux </p>
	  <p class="title">
	  	A Machine Learning Technique Based on In-Silico Data To Predict Origin Coordinates of Cardiac Arrhythmia
	  </p>
	  <details>
	  <summary>Abstract</summary>
	  <p> Premature ventricular contractions (PVCs) occur when the heartbeat is initiated in the ventricles rather than by the sinoatrial node. While isolated PVCs are usually harmless, frequent PVCs can induce ventricular fibrillation or tachycardia and must be treated. When PVCs cannot be suppressed with drugs, catheter ablation is an option. To prepare an ablation procedure, cardiologists need an initial estimate of the PVC origin.
<br>
We tested a machine-learning method to localize PVCs using a database of ECGs paced at known locations in 7 virtual patients. For each patient a mesh was created from cardiac imaging data and pacing locations were translated to a reference mesh using the Iterative Closest Point method. We extracted 7 voltage-based and timing-based features from the QRS complexes of the paced beats and used the Gradient Boosting method to learn the relation between these features and the origin coordinates. The model was trained repeatedly with upto 6 patients, and tested on the remaining patients. For all the cases, increasing the number of patients in the training set increased the accuracy on the tested patient, and an optimal number of 25 pacing sites per patient was found, giving us a mean prediction error of about 15 mm. In two clinical cases the model predicted the succesful ablation site with 12 and 10 mm error, which is clinically relevant for a catheter ablation procedure. 
<br>
We conclude that our method gives useful information to efficiently start a catheter ablation procedure. It can be complemented with an intra-procedural method that uses the patient's own paced beats to refine the prediction. Furthermore, the accuracy of the method can be improved by increasing the number of patients in the database.
	  </p> 
	</details>


	  <hr>
	  
	  <p > <strong>Bartolucci, Chiara</strong>. Universit&agrave di Bologna</p>
	  <p class="title"> Novel Computational Model of Human Ventricular Action Potential for Investigate the Extracellular Calcium Effects </p> 
	 <details>
	  <summary>Abstract</summary>
	  <p>The importance of electrolyte concentrations for the cardiac function is well established. Electrolyte variations can lead to arrhythmias onset, due to their important role in the action potential (AP) genesis and in maintaining cell homeostasis. However, most of the human AP computer models available in the literature were developed with constant electrolyte concentrations, and fail to simulate physiological changes induced by electrolyte variations. This is especially true for Ca2+, even in the most widely used models in cardiac electrophysiology. 
	  <br>
The new human ventricular model (BPS2020, [1]), based on O'Hara&hyphen;Rudy (ORd, [2]) model, aims to correct simulate changes due to electrolytes and answer the question: "which are the quantitative contributions of the mechanisms involved in the relationship between extracellular calcium concentration [Ca2+]o and the AP?"[3], using human&hyphen;based modeling and simulations since they could provide useful support to investigate this phenomenon.
	<br>
From earlier studies, it is well known that the L-type Ca2+ current (ICaL) is the ionic current mainly affected by [Ca2+]o changes. In particular, calcium-dependent inactivation (CDI) seems to play the most significant role. For this reason, the main changes needed with respect to ORd are: (i) increased sensitivity of ICaL current inactivation to [Ca2+]; (ii) a single compartment description of the sarcoplasmic reticulum; iii) the replacement of Ca2+ release.
	<br>
BPS2020 can simulate the physiological APD-[Ca2+]o relationship, while also retaining the well-reproduced properties of ORd (APD rate dependence at [K+]o=4mM, restitution, accommodation, and current block effects). We also used BPS2020 to generate an experimentally-calibrated population of models to investigate: (i) the occurrence of repolarization abnormalities in response to hERG current block; (ii) the rate adaptation variability; (iii) the occurrence of alternans and delayed after-depolarizations at fast pacing. Our results indicate that we successfully developed an improved version of ORd, which can be used to investigate electrophysiological changes and pro-arrhythmic abnormalities induced by electrolyte variations and current block at multiple rates and at population level.

<br><br>
[1]	Bartolucci C, Passini E, Hyttinen J, Paci M, Roth BJ. Simulation of the Effects of Extracellular Calcium Changes Leads to a Novel Computational Model of Human Ventricular Action Potential With a Revised Calcium Handling 2020;11:1&hyphen;20. doi:10.3389/fphys.2020.00314.
<br>
[2]	O'Hara T, Vir&aacuteg L, Varr&oacute A, Rudy Y. Simulation of the undiseased human cardiac ventricular action potential: Model formulation and experimental validation. PLoS Comput Biol 2011;7.
<br>
[3]	Bartolucci C, Paci M, Severi S. Investigation of the Extracellular Calcium Effects on Action Potential using the Most Recent Human Ventricular Cell Models. 2020 Comput Cardiol Conf 2020;47:7&hyphen;10. doi:10.22489/cinc.2020.296.

	  </p>
	</details>


	<hr>

	<p> <strong>Bevilacqua, Tommaso</strong>. Universit&agrave degli Studi di Milano </p>
	<p class="title">BDDC preconditioners for virtual element dicretizations of the Stokes equations </p>
	<details>
		<summary>Abstract</summary>
		<p>
The balancing domain decomposition by constraints (BDDC) preconditioners are domain decomposition methods based on the subdivision of the computational domain of partial differential equations (PDEs) into non-overlapping subdomains. BDDC methods represent an evolution of balancing Neumann-Neumann methods, that have been used extensively in the past to solve large scale finite element problems.
			<br>
In our work, we apply BDDC to solve PDEs where the space discretization is performed by virtual element methods (VEM), a new family of methods introduced in 2013, which could be considered as a generalization of finite element methods to arbitrary element-geometry. The advantage of these methods is that we can apply them on a wide choice of general polygonal meshes without integrating complex non-polinomial functions on the elements, keeping a high degree of accuracy.
			<br>
Here we present a BDDC algorithm to solve the Schur complement system obtained from a recent divergence free VEM discretization of the two-dimensional Stokes equations. Firstly, we briefly present the VEM mathematical framework, then we analyze theoretically the convergence of the proposed BDDC preconditioners and finally we report some computational results that validate the theoretical estimates.
		</p>
	</details>

	<hr>

	<p> <strong>Botti, Sofia & Torre, Michele</strong>. Università degli Studi di Pavia </p>
	<p class="title">Isogeometric simulations of hiPSC-CM cardiac tissue </p>
	<details>
		<summary>Abstract</summary>
		<p>
		Human induced pluripotent stem cells &hyphen; derived cardiomyocytes (hiPSC-CMs) are a promising in vitro tool for cardiac investigations, with the potential to eliminate interspecies and interpersonal variations though patient-specific derivation. Using these cells, laboratory studies are able to reproduce a tissue engineered scale model of the human ventricle2, in order to create a reliable substitute to animal models. An in silico replica of this engineered platform is useful for a number of reasons, such as fast preliminary tests and the quantification of non-experimentally measurable quantities. 
Isogeometric Analysis (IGA) reveals to be an effective alternative to Finite Element Methods, due to the higher accuracy per degree of freedom. The present work is devoted to the application of IGA to the simulation of the engineered ventricle. In this setting, we build up a suitable framework for geometrical modeling and, in this setting, we find the solution of the monodomain problem, equipped with the cellular model of Paci et al. 
 
<br><br>
[1] M. Paci, R.P. Polonen, D. Cori, K. Penttinen, K. Aalto&hyphen;Setala, S. Severi, J. Hyttinen, Automatic optimization of an in silico model of human ipsc derived cardiomyocytes recapitulating calcium handling abnormalities, Frontiers in physiology 9 (2018) 709. doi: 10.3389/fphys.2018.00709.
<br>
[2] L. A. MacQueen, S. P. Sheehy, C. O. Chantre, J. F. Zimmerman, F. S. Pasqualini, X. Liu, J. A. Goss, P. H. Campbell, G. M. Gonzalez, S.J. Park, et al., A tissue&hyphen;engineered scale model of the heart ventricle, Nature biomedical engineering 2 (12) (2018) 930&hyphen;941. doi: 10.1038/s41551&hyphen;018&hyphen;0271&hyphen;5.
<br>
[3] K. Takahashi, K. Tanabe, M. Ohnuki, M. Narita, T. Ichisaka, K. Tomoda, S. Yamanaka, Induction of pluripotent stem cells from adult human fibrobroblasts by defined factors, Cell 131 (5) (2007) 861&hyphen;872. doi:10.1016/j.cell.2007.11.019.
		</p>
	</details>
 	
	<hr>

	<p><strong>Caligari, Silvia</strong>. Universit&agrave degli Studi di Milano & Universit&agrave degli Studi di Milano </p>
	<p class="title">An electro fluid structure model based on an embedded strategy with application to cardiac simulations </p>
	<details>
		<summary>Abstract</summary>
		<p>
Computing a fully coupled cardiac model consists in connecting electrophysiology, active and passive mechanics and fluido dynamics. 
<br>
We start from the electrophysiological environment, where transmembrane electric potential is described by the Monodomain system coupled with Luo-Rudy model for ionic currents. In this work it is used a space discretization based on finite elements method and a combination of an implicit scheme and Rush-Larsen method.
Then we introduce a novel framework inspired by the Immersed Boundary Method for predicting the fluid-structure interaction of complex structures immersed in laminar, transitional and turbulent flows.
<br>
The dynamic behavior of a deformable structure is simulated in a finite element framework by adopting a fully implicit scheme for its temporal integration, while the Navier-Stokes equations for the incompressible flow are discretized with high-order finite difference.
The structure and the flow solvers are coupled by using an L2-projection method for the transfer of velocities and forces between the fluid grid and the solid mesh.
<br>
Lastly we insert into the structure's behavior an active force, which would represent muscle contraction in order to create an embryonal connection between the FSI environment end the electrophysiological one.
<br>
All numerical simulations are implemented using the open source framework Moose. 
		</p>
	</details>

	<hr>

	<p><strong>Chegini, Fatemeh</strong>. Zuse Institute Berlin </p>
	<p class="title">Multilevel optimization algorithm for Inverse Problem in Electrocardiography </p>
	<details>
		<summary>Abstract</summary>
		<p>
		Detection and quantification of myocardial scars are helpful for the diagnosis of heart diseases and for personalized simulation models. Scar tissue is generally characterized by different conduction of excitation. We aim at estimating conductivity-related parameters from endocardial mapping data. Solving this inverse problem requires computationally expensive monodomain simulations on fine discretizations. We aim at accelerating the estimation by combining electrophysiology models of different complexity. Distributed parameter estimation is performed by minimizing the misfit between simulated and measured electrical activity on the endocardial surface, subject to the monodomain model and regularization. We formulate this optimization problem, including the modeling of scar tissue and different regularizations, and design an efficient solver. We consider grid hierarchies and monodomain–eikonal model hierarchies in a recursive multilevel trust-region method.  In several situations, scar reconstruction based on eikonal and monodomain models differ significantly, suggesting the use of the more involved monodomain model for this purpose. Eikonal models can accelerate the computations considerably, enabling the use of complex electrophysiology models for estimating myocardial scars from endocardial mapping data. For computing a maximum posterior estimate, we investigate different optimization approaches based on adjoint gradient computation: steepest descent, limited memory BFGS, and recursive multilevel trust region methods using mesh hierarchies or heterogeneous model hierarchies. We compare overall performance, asymptotic convergence rate, and pre-asymptotic progress on selected examples in order to assess the benefit of our multi-fidelity acceleration.
		</p>
	</details>

	<hr>

	<p><strong>Cicci, Ludovica</strong>. Politecnico di Milano </p>
	<p class="title">A deep learning-based operator approximation for model order reduction in cardiac mechanics
 </p>
	<details>
		<summary>Abstract</summary>
		<p>
		Simulating cardiac mechanics with high-fidelity full-order models (FOMs) is a very demanding task from a computational standpoint, especially when aiming at spanning a broad range of virtual (e.g., pathological) scenarios. Reduced-order models (ROMs) have been developed in order to replace the FOM solution by a problem of much smaller dimension. Classical projection-based ROMs, built, e.g., through the Reduced Basis (RB) method, have been successfully applied to cardiac mechanics, so far under a quasi-static assumption, requiring an intrusive hyper-reduction stage to make the assembling of the ROM independent of the FOM dimension [1].
		<br>
To deal with nonlinear elastodynamics problems and overcome the hyper-reduction bottleneck, we propose a novel strategy for learning nonlinear ROM operators using deep neural networks [2]. The resulting Deep-HyROMnet is a physics-based model, still relying on a POD-Galerkin strategy, but employing a deep neural network architecture to approximate reduced residual vectors and Jacobian matrices once a Galerkin projection has been performed. The proposed approach has been assessed in several scenarios dealing with the myocardial displacement of a patient-specific left ventricle, suitably coupled with a 0D lumped-parameter windkessel model for external blood circulation and a surrogate active tension model, yielding extremely good approximation properties in terms of both accuracy and computational speed up.
		<br>
This project has received funding from the European Research Council
(ERC) under the European Union’s Horizon 2020 research and innovation pro-
gramme (grant agreement No 740132).
	<br><br>
[1] D. Bonomi, A. Manzoni, A. Quarteroni. A matrix DEIM technique for
model reduction of nonlinear parametrized problems in cardiac mechanics.
Comput. Meth. Appl. Mech. Engrg. 324: 300-326, 2017.
	<br>
[2] S. Fresca, L. Dede’, A. Manzoni. A comprehensive deep learning-
based approach to reduced order modeling of nonlinear time-dependent
parametrized PDEs. J. Sci. Comput. 87 (61), 2021.
		</p>
	</details>


	<hr>

	<p><strong>Gander, Lia</strong>. Università della Svizzera Italiana </p>
	<p class="title">Fast characterization of inducible regions of atrial fibrillation models with multi-fidelity Gaussian process classification
 </p>
	<details>
		<summary>Abstract</summary>
		<p>
		Computational models of atrial fibrillation have successfully been used to predict optimal ablation sites. A critical step to assess the effect of an ablation pattern is to pace the model from different, potentially random, locations to determine whether arrhythmias can be induced in the atria. In this work, we propose to use multi-fidelity Gaussian process classification on Riemannian manifolds to efficiently determine the regions in the atria where arrhythmias are inducible. We build a probabilistic classifier that operates directly on the atrial surface. We take advantage of lower resolution models to explore the atrial surface and combine seamlessly with high-resolution models to identify regions of inducibility. When trained with 40 samples, our multi-fidelity classifier shows a balanced accuracy that is 10% higher than a nearest neighbor classifier used as a baseline atrial fibrillation model, and 9% higher in presence of atrial fibrillation with ablations. We hope that this new technique will allow faster and more precise clinical applications of computational models for atrial fibrillation.
		</p>
	</details>


	<hr>

	<p><strong>Gillette, Karli</strong>. Medizinische Universit&aumlt Graz </p>
	<p class="title">A Framework for the Generation of Digital Twins of Ventricular Electrophysiology  </p>
	<details>
		<summary>Abstract</summary>
		<p>
Cardiovascular diseases are a leading cause of death worldwide posing a large economic and social burden. To combat the increasing prevalence of cardiovascular disease, personalized models of cardiac electrophysiology show high potential to aid in clinical diagnostics, treatment planning, and prognostics. Such models, termed cardiac digital twins, match both the anatomy and electrophysiology of a given patient.
 <br>
Challenges during both model generation and personalization, however, have limited clinical uptake and use. Not only must cardiac digital twins be generated within short time frames compatible with clinical applications, personalization must be based on clinical data that is oftentimes noisy or sparse. Furthermore, the models must replicate the underlying patient electrophysiology with high fidelity to be reliable and trustworthy for clinical utilization. Current cardiac digital twins have been limited in at least one of these regards.
<br>
We aimed to overcome many of these remaining challenges by constructing an automated framework for the generation and personalization of cardiac digital twins from noninvasive clinical data. Novel contributions include a complete mathematical description of cardiac electrophysiology needed for high biophysical fidelity, techniques for automatically varying all described parameters, and an efficient forward model for simulating cardiac electrophysiology. The feasibility of cardiac digital twinning is demonstrated within a single subject using a forward sampling schematic for personalization, based on minimizing the mismatch between the computed and measured 12 lead ECGs.	
		</p>
	</details>


	<hr>
	
	<p><strong>Piersanti, Roberto</strong>. Politecnico di Milano </p>
	<p class="title">Modelling whole heart muscle fibers in electro-mechanical simulations</p>
	<details>
		<summary>Abstract</summary>
		<p>
		A crucial issue in simulating heart electro-mechanics (EM) is accounting and modelling the arrangement of myocardial fibers that characterizes the cardiac tissue. Aggregations
of myofibers, namely the results of cardiomyocytes orientation, plays a key role in the electric signal propagation and in the myocardial contraction. This motivates the need to accurately include cardiac fibers in EM computational models. Laplace-Dirichlet-Rule-Based-Methods (LDRBMs), which provide a surrogate of myocardial fibers field, are one of the most used strategy to prescribe fiber orientation in EM models. In this work, we present a novel unified LDRBM for generating myocardial whole heart fibers directly on full heart computational model. The methodology is straightforward and can be easily applied to any four chambers geometry. The heart LDRBM includes a detailed myocardial fiber architecture and is able to quantitatively reproduce almost all the features of the different four chambers, particularly those of the right ventricle and the bi-atrial bundles. The validity of the model is demonstrated through EM simulations on a realistic whole heart geometry.
		</p>
	</details>
	<hr>
	<p><strong>Salvador, Matteo</strong>. Politecnico di Milano </p>
	<p class="title">A neural network approach for real-time numerical simulations of cardiac electromechanics </p>
	<details>
		<summary>Abstract</summary>
		<p>
		We devise a Machine Learning algorithm to perform real-time simulations of cardiac electromechanics. Our algorithm allows to derive a reduced-order model (ROM), written as a system of Ordinary Differential Equations, in which the right-hand side is represented by an Artificial Neural Network (ANN), that possibly depends on a set of parameters associated with the model to be surrogated. This method is non-intrusive, as it only requires a collection of pressure-volume transients obtained from the full-order model. Once trained, the ANN-based ROM can be coupled with hemodynamic models describing the external circulation, in the same manner as the original electromechanical model, but at a dramatically reduced computational cost. We demonstrate the effectiveness of the proposed strategy on two different problems. First, we employ the ANN-based ROM to perform a global sensitivity analysis on both the electromechanical and the hemodynamic models. Second, we perform a Bayesian estimation of a couple of parameters starting from noisy measurements of two scalar outputs.
		</p>
	</details>

	<hr>

	<p><strong>S&aacutenchez, Jorge</strong>. Karlsruher Institut f&uumlr Technologie </p>
	<p class="title">A detailed model of fibrotic tissue and corresponding electrograms </p>
	<details>
		<summary>Abstract</summary>
		<p>
		During atrial fibrillation (AF), the cardiac tissue suffers an electrical and structural remodeling. On the one hand, electrical remodeling is characterized by a change in the electrophysiology of the cardiac myocytes. On the other hand, structural remodeling is characterized by an increase of myofibroblasts responsible for collagen deposit to maintain the extracellular matrix known as fibrosis. The combination of electrical and structural remodeling in the atrial tissue alters the electrical propagation and changes the morphology of the corresponding electrograms measured at the surface of the tissue.

Highly detailed biophysical models help to understand better the link between the tissue characteristics and the measured electrograms. In this work, we explore the influence of cellular heterogeneity and, together with models of realistic commercially available catheters, characterize the cardiac substrate from the signal morphology.
Moreover, using in silico data provide valuable information of the tissue underneath the recording electrode. In combination with in vivo recordings from patients with atrial fibrillation, we characterized the atrial substrate from the electrogram morphology. The proposed approach helps to overcome the currently used single voltage threshold that tries to distinguish healthy from pathological tissue and explode the advantage of in silico experiments.

		</p>
	</details>
	<hr>

	<p><strong>Zingaro, Alberto</strong>. Politecnico di Milano </p>
	<p class="title">Computational fluid dynamics of blood flow in the human haert: a multiphysics and multiscale model </p>
	<details>
		<summary>Abstract</summary>
		<p>
Computer&hyphen;based numerical simulations&hyphen;also known as in silico simulations&hyphen;of the heart and blood circulation represent a valuable tool to analyze the cardiac function and to enhance the understanding of cardiovascular diseases. In this talk, we introduce a Computational Fluid Dynamics (CFD) approach for the numerical simulation of the whole heart hemodynamics in both physiological and pathological conditions, by accounting for all the physical processes that influence cardiac flows: moving domain and interaction with electromechanics, transitional&hyphen;turbulent flows, cardiac valves and coupling with the external circulation.
In our CFD model, we adopt the Navier&hyphen;Stokes equations in Arbitrary Lagrangian Eulerian (ALE) framework, in order to account for the endocardium displacement. We use a Variational Multiscale &hyphen; Large Eddy Simulation (VMS&hyphen;LES) method [1,2] to get a stable formulation of the Navier&hyphen;Stokes equations discretized by means of Finite Element Method, to stabilize the advection&hyphen;dominated regime and to account for turbulence modeling within the framework of LES. We mimic the presence of cardiac valves by means of the Resistive Immersed Implicit Surface (RIIS) method [3]. To impose a physiological displacement of the domain boundary, we employ a 3D ventricular electromechanical model coupled to a lumped&hyphen;parameter (0D) closed&hyphen;loop model of the circulation and the remaining cardiac chambers [4]. To extend the ventricular motion to the endocardium of the remaining heart, we introduce a novel preprocessing procedure that combines an harmonic extension of the electromechanical displacement with the motion of the atria based on the 0D model [5]. We thus obtain a one&hyphen;way coupled electromechanics&hyphen;fluid dynamics model in the ventricle(s). To better match the 3D CFD with blood circulation, we also couple the 3D Navier&hyphen;Stokes equations &hyphen;&hyphen; with domain motion driven by electromechanics &hyphen;&hyphen; to the 0D circulation model. We obtain a multiscale coupled 3D&hyphen;0D fluid dynamics model that we solve via a segregated numerical scheme. We carry out numerical simulations for a healthy left heart and we validate our model by showing that significant hemodynamic indicators are correctly reproduced; we simulate the blood flow in the left heart in the scenario of mitral valve regurgitation. Finally, we show numerical results for the CFD of the whole heart [5].
<br>
<br>
[1] D. Forti and L. Ded&egrave, Semi&hyphen;implicit BDF time discretization of the Navier&hyphen;Stokes equations with VMS&hyphen;LES modeling in a high performance computing framework, Computers &amp; Fluids 117, 168&hyphen;182 (2015).
<br>[2] A. Zingaro, L. Ded&egrave, F. Menghini, and A. Quarteroni, Hemodynamics of the heart's left atrium based on a Variational Multiscale&hyphen;Les numerical method, European Journal of Mechanics&hyphen;B/Fluids 89, 380&hyphen;400 (2021).
<br>[3] M. Fedele, E. Faggiano, L. Ded&egrave, and A. Quarteroni, A patient&hyphen;specific aortic valve model based on moving resistive immersed implicit surfaces, Biomechanics and modeling in mechanobiology 16, 1779&hyphen;1803 (2017).
<br>[4] F. Regazzoni, M. Salvador, P. C. Africa, M. Fedele, L. Ded&egrave, and A. Quarteroni, A cardiac electromechanics model coupled with a lumped parameters model for closed&hyphen;loop blood circulation. Part I: model derivation, arXiv preprint arXiv:2011.15040 (2020).
<br>[5] A. Zingaro, I. Fumagalli, L. Ded&egrave, M. Fedele, P. C. Africa, A. F. Corno, and A. Quarteroni, A multiscale CFD model of blood flow in the human left heart coupled with a lumped parameter model of the cardiovascular system, MOX Report 56 (2021).
		</p>
	</details>


  </main>

  <footer>
    <p>Created by N Barnafi, thanks to G Merli for your help with the hosting and K Quirk for creating simple.css.</p>
  </footer>

</html>
