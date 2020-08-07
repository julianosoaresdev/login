<?php

	namespace CR\Helper;

	Class Helper
	{

		//Limpa campos de cadastro
		public function limpaCampo($campo)
		{
			$campo = str_replace("'", "", $campo);
			$campo = addslashes($campo);
			$campo = strip_tags($campo);
			$campo = preg_replace("@(–|\#|\*|;|=)@s", "", $campo);
			$campo = urldecode($campo);
			return trim($campo);
		}

	}