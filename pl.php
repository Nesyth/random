<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
     * Polish translation courtesy of Nesyth and dolan.
	 */
	
	/**
	 * Text direction
	 * @var string
	 *
	 * LTR = Left to right
	 * RTL = Right to left
	 */
	$dir = 'ltr';

	$lang = array(

		// Navigation bar
		"home" => "Strona główna",
		"store" => "Sklep",
		"buy_credits" => "Kup kredyty",
		"raffles" => "Loteria",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Admin",
		"sign_out" => "Wyloguj",
		"sign_in" => "Zaloguj",

		// Header errors and messages
		"not_setup" => "Nie ustawiłeś ustawień panelu w sposób poprawny! <a href='admin.php?a=gen&p=settings'>Kliknij tutaj</a> [Admin -> General Settings -> Settings]",
		"header_sandbox" => "PayPal sandbox jest włączony. Używaj tylko sandboxu do testowania! Możesz wyłączyć go <a href='admin.php?a=gen&p=paypal'>tutaj</a>",
		"missing_action" => "One or more packages is missing an action!",
		"unfinished_action" => "You have an un-finished action in the 'Profile' page, <a href='profile.php'>here</a>",

		// Frontpage
		"welcome" => "Witaj - zaloguj się",
		"welcome_text" => "Zaloguj się poprzez steam, aby korzystać z naszego sklepu.",

		// News
		"news" => "Nowości",
		"by" => "Przez",
		"no_news" => "Brak nowości",
		"no_news_text" => "Nie ma żadnych nowości.",
		"no_news_articles" => "Nie ma żadnych artykułów.",

		// Footer
		"tos" => "Warunki usługi",
		"powered_by" => "Powered by Steam",

		// Store
		"credits" => "Kredytów",
		"featured_pkg" => "Wyróżniony pakiet",
		"permanent" => "Na zawsze",
		"non_permanent" => "Na czas określony",

		"select_credit" => "Wybierz pakiet kredytów",
		"select_raffle" => "Wybierz pakiet loterii",
		"global_packages" => "Pakiety globalne",

		// Raffles
		"raffle_ticket" => "Kup bilet",
		"raffle_ended" => "Loteria się zakończyła, zwycięzcą jest: ",
		"raffle_not_compatible" => "This package is not compatible with one you own. Entry to raffle denied.",
		"raffle_already_own" => "Już masz ten pakiet, twój wstęp do loterii został odrzucony.",
		"raffle_reached_max" => "Zakupiłeś już wystarczającą ilość akcji loterii, wstęp do loterii został odrzucony.",

		// Support
		"create_ticket" => "Utwórz zgłoszenie",
		"ticket_closed" => "To zgłoszenie jest zamknięte.",
		"reply" => "Odpowiedz",
		"create" => "Utwórz",

		// Terms of Service
		"tos_edited" => "Warunki usługi uległy zmianie. <a href='tos.php'>Warunki usługi</a> akceptuj je przed swoim zakupem!",
		"tos_must_accept" => "Muszę przystać na warunki usługi przed zakupem!",
		"tos_accept" => "Akceptuj",

		// Purchase buttons
		"purchase_paypal" => "Kup poprzez Paypal",
		"purchase_credits" => "Kup za kredyty",
		"purchase" => "Zakup",
		"buy_sign_in" => "Przed zakupem musisz się zalogować!",
		"buy_already_own" => "Już posiadasz ten pakiet!",
		"buy_not_compatible" => "Ten pakiet jest niekompatybilny z innym, który już posiadasz!",
		"buy_they_already_own" => "Ta osoba posiada już ten pakiet!",
		"buy_they_not_compatible" => "Ten pakiet jest niekompatybilny z tym, który już posiada!",

		// Packages
		"buying_someone_else" => "Masz zamiar kupić pakiet dla kogoś innego?",
		"buying_yourself" => "Obecnie kupujesz dla siebie",
		"buying_for" => "Obecnie kupujesz dla",
		"packages_custom_amount" => "Niestandardowa ilość",

		"packages_not_available" => "Brak dostępnych pakietów dla tego serwera.",
		"raffle_not_available" => "Nie odbywa się obecnie żadna loteria.",
		"credit_not_available" => "Brak dostępnych pakietów z kredytymi.",

		// Buttons
		"submit" => "Potwierdź",

		// Profile
		"non_perm_pkg" => "Pakiet na czas określony",
		"perm_pkg" => "Pakiet(y) permanentne",
		"acc_info" => "Informacje o koncie",
		"pkg_history" => "Historia zakupu pakietów",
		"acc_credits" => "Kredyty",
		"transfer_credits" => "Prześlij kredyty",
		"package" => "Pakiet",

		// Tables
		"id" => "ID",
		"user" => "Użytkownik",
		"description" => "Opis",
		"timestamp" => "Timestamp",
		"action" => "Akcja",
		"replies" => "Odpowiedzi",
		"view" => "Wyświetl",

		// Select boxes
		"select_server" => "Wybierz serwer:",
		"select_currency" => "Wybierz walute:",
		"select_category" => "Wybierz kategorie:",
		"none" => "Nic",

		// Modals
		"yes" => "Tak",
		"no" => "Nie",
		"sure" => "Jesteś pewien?",
		"sure_cur" => "Jesteś pewien, że chcesz usunąc tą walutę?",
		"sure_srv" => "Jesteś pewien, że chcesz usunąc ten serwer?",
		"sure_cat" => "Jesteś pewien, że chcesz usunąc tą kategorie?",

		// Dangerous settings
		"dangerous" => "Opcje niebezpieczne",
		"danger_cur" => "Alternatywnie, możesz usunąć tą walutę.",
		"danger_srv" => "Nie usuwaj serwera dopóki nie ma on przydzielonych żadnych pakietów!",
		"danger_cat" => "Nie usuwaj kategorii dopóki nie ma ona przydzielonych żadnych pakietów!!",
		"delete" => "Skasuj",

		// Admin nav
		"dashboard" => "Tablica",
		"general_settings" => "Opcje główne",
		"support_tickets" => "Zgłoszenia",
		"servers" => "Serwery",
		"currencies" => "Waluty",
		"categories" => "Kategorie",
		"packages_and_actions" => "Pakiety & akcje",
		"credit_packages" => "Pakiety kredytów",
		"raffles" => "Loterie",
		"theme_editor" => "Edytor stylów",
		"documentation" => "Dokumentacja",

		// General Settings
		"settings" => "Opcje",
		"main_page" => "Strona główna",
		"integration_settings" => "Integracja - opcje",
		"ingame_notifications" => "Powiadomienia w grze",

		// Servers page
		"add_srv" => "Dodaj serwer",
		"edit_srv" => "Edytuj serwer",
		"server_name" => "Nazwa serwera",
		"featured_pkg_short" => "Wyróżniony pakiet",

		// Currency page
		"add_cur" => "Dodaj walutę",
		"edit_cur" => "Edytuj walutę",
		"cc" => "Kod waluty",

		// Category page
		"add_cat" => "Dodaj kategorie",
		"edit_cat" => "Edytuj kategorie",
		"cat_name" => "Nazwa kategorii",

		// Dashboard nav
		"main_dashboard" => "Główna tablica",
		"sale" => "Wyprzedaż",
		"transactions" => "Transakcje",
		"users" => "Użytkownicy",
		"logs" => "Logi",
		"update_sql" => "Aktualizuj SQL",
		"other_features" => "Inne opcje",

		// Admin dashboard
		"total" => "W sumie",
		"full_total" => "Całość",
		"dashboard_text" => "Witaj w panelu administratora, stąd będziesz w stanie monitorować sklep.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Witamy",
		"need_credits" => "Potrzebujesz więcej kredytów? <a href='store.php?credits'>Kliknij tutaj!</a>",
		"no_history" => "Brak historii",
		"amount" => "Ilość",
		"you_have_none" => "Nic obecnie nie posiadasz",

		"add_cre" => "Dodaj pakiet kredytów",
		"edit_cre" => "Edytuj pakiet kredytów",
		"pack_title" => "Nazwa pakietu",
		"price" => "Cena",
		"currency" => "Waluta",
		"sure_cre" => "Jesteś pewien, że chcesz usunąć pakiet kredytów?",
		"danger_cre" => "Alternatywnie, możesz usunąć pakiet kredytów.",
		"select_package" => "Wybierz pakiet:",
		"choose_cre" => "Wybierz pakiet kredytów",
		"brief_desc" => "Opis",
		"amt_of_cre" => "Ilość kredytów",
		"price_of_pkg" => "Cena pakietu",
		"no_support" => "Nie posiadasz obecnie żadnych zgłoszeń",
		"no_other_available" => "Żadne inne pakiety nie są dostępne",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Aktywuj pakiet za darmo!",
		"dashboard_revenuegraph" => "Wykres wydatków",
		"dashboard_revenuecurrency" => "Pokazane w twojej głównej walucie",
		"dashboard_packagesgraph" => "Sprzedane pakiety",
		"dashboard_serversgraph" => "Pakiety sprzedane na poszczególnych serwerach",
		"between" => "pomiędzy",
		"and" => "i",

		/** 
		 * New in 1.4.9
		 */
		"free" => "Darmowe",
		"buy_own_free" => "Już posiadasz ten darmowy pakiet. Nie możesz aktywować go drugi raz!",
		
		/**
		 * New in 1.4.9.2
		 */
		"updates" => "Aktualizacje",

		/**
		 * New in 1.4.9.3
		 */
		"header_sqlupdate" => "Masz opcje zaktualizowania MySQL do nowszej wersji <a href='admin.php?update'>tutaj!</a>",
		"monthly_goal" => "Miesięczny cel",

		/**
		 * New in 1.4.9.6
		 */
		"payment_success" => "Płatność zakończona sukcesem!",
		"profile_updated" => "Twój profil został zaktualizowany.",
		"payment_failed" => "Błąd płatności!",
		"check_credits" => "Proszę upewnij się, że masz odpowiednią ilość pakietu do zakupu!",
		"not_authorised" => "Nie jesteś uprawniony do poglądu tej strefy. Najpierw się zaloguj!",

		/**
		 * New in 1.5
		 */
		"wiki" => "Wiki",
		"no_graph_info" => "Brak informacji wykresu",
		"no_graph_info_text" => "Brak wyświetlania się wykresu z powodu braku transakcji!",
		"paymentwall_purchase" => "Kup poprzez Paymentwall",
		"stripe_purchase" => "Kup poprzez Stripe",
		"payment_gateways" => "Bramki płatności",
		"advanced" => "Zaawansowane",
		"no_servers" => "Żaden serwer nie jest obecnie dostępny.",
		"entries" => "wejścia",
		"you_can_enter" => "Możesz dołączyć",
		"times_more" => "więcej razy",
		"dashboard_creditsrevenue" => "Ten wykres przelicza również wydane kredyty na pieniądze. (Kredyty = <font color='#9c9c9c'><b>Szary</b></font>, Pieniądze = <font color='#c10000'><b>Czerwony</b></font>)",
		"pkg_discounted" => "Ten pakiet jest przeceniony ponieważ go już posiadasz",

		"compatible_text" => "Jeżeli posiadasz ten pakiet, nie możesz zakupić tych podanych poniżej",
		"not_compatible" => "Brak kompatybilności z",

		"packages" => "Pakiety",
		"upgradeable_text" => "If you own the package selected, you get this one at a discounted price of the selected packages' price",
		"upgradeable" => "Upgradeable with",

		"assign_actions" => "Assign actions",
		"actions_text" => "Assign what actions you want this package to perform after it has been purchased by a player.",
		"actions" => "Actions",
		"servers" => "Servers",
		"label_amount" => "Label amount",
		"add_package" => "Add package",
		"edit_package" => "Edit package",
		"labels" => "Labels",
		"title" => "Title",
		"category" => "Category",
		"no_packages" => "You currently have no packages on the system",

		/**
		 * New in 1.5.0.6
		 */
		"signin" => "Zaloguj się",
		"welcome_signin" => "Musisz się zalogować przed zakupem jakiegokolwiek pakietu",
		"blacklist_notext" => "Musisz wpisać prawidłowy Steam64 albo SteamID do czarnej listy!",
		"blacklist_success" => "Udało ci się umieścić tą osobe na czarnej liście",
		"blacklisted_you" => "Jesteś umieszczony na czarnej liście, nie możesz kupić żadnego pakietu",
		"blacklisted_them" => "Ta osoba jest umieszczona na czarnej liście, nie możesz kupić jej żadnego pakietu!",

		"recent_donators" => "Ostatni kupujący",
		"name" => "Nick",
		"recent_none" => "Nie ma obecnie żadnych kupujących",
		"raffle_free" => "Dołącz za darmo!",

		/**
		 * New in 1.5.0.8
		 */
		"top_donators" => "Najlepsi donatorzy",
		"top_none" => "Nie ma obecnie najlepszych donatorów",

		/**
		 * New in 1.5.0.9
		 */
		"step" => "Krok",

		/**
		 * New in 1.5.1
		 */
		"permission_groups" => "Uprawnienia grup",
		"add_permission" => "Dodaj grupę permisji",
		"edit_permission" => "Edytuj grupę permisji",
		"permissions" => "Permisje",
		"no_perm" => "Przepraszam Dave, nie mogę ci pozwolić tego zrobić (brak permisji)",

		/**
		 * New in 1.5.1.2
		 */
		"select_gateway" => "Wybierz opcje płatności",

		/**
		 * New in 1.5.2
		 */
		"buy_disable" => "Wyłączone pakiety",
		"buy_disable_text" => "Wyłącz te pakiety jeżeli kupisz ten",

		"credits_doesntexist" => "Ten użytkownik nie istnieje w naszym systemie.",
		"credits_yourself" => "Nie możesz przesłać kredytów samemu sobie.",
		"credits_steamid" => "Spróbuj inne SteamID",
		"credits_transferringto" => "Przekazywanie do:",

		"type" => "Typ",
		"gateway" => "Bramka",
		"no_users" => "Nie znaleziono użytkowników",

		"view_profile" => "Pokaż profil",
		"view_blacklist" => "Pokaż czarną liste",

		"manage" => "Zarządzaj",
		"users_search" => "Wyszukaj nick, SteamID albo Steam64",

		"transaction" => "Transakcja",
		"delivered" => "Dostarczono",
		"state" => "Status",
		"assign_package" => "Przypisz pakiet",
		"set_credits" => "Ustaw kredyty",
		"give_ticket" => "Daj kredyty",
		"del_inactive_actions" => "Usuń przeterminowane akcje",

		"select_pkg" => "Wybierz pakiet",
		"do_assign_actions" => "Przypisz akcje",
		"dont_assign_actions" => "Nie przypisuj akcji",
		"clone_expiretime" => "Skopiuj czas wygaśnięcia ostatniego pakietu tego samego typu",
		"assign" => "Przypisz",

		"set" => "Wybierz", 
		"disable" => "Wyłącz",
		"enable" => "Włącz",
		"inactive_everyone" => "Ustaw jako przeterminowany dla wszystkich",
		"del" => "Usuń",
		"edit" => "Edytuj",

		"sale_settings" => "Opcje wyprzedaży",
		"sale_text" => "Wybierz pakiety, które mają trafić na promocje.",
		"message" => "Wiadomość",
		"percentage" => "Zniżka",
		"end_date" => "Koniec",

		"update" => "Aktualizacja",
		"automatic_updates" => "Automatyczne aktualizacje",
		"dl_lua" => "Pobierz ostatni plik lua",
		"dl_web" => "Pobierz ostatni plik web",
		"no_write_perm" => "Twój folder z aktualizacjami nie ma przypisanych permisji! Automatyczna aktualizacja nie będzie działać, dopóki nie ustawisz chmod na 777. <br> Możesz również użyć tego przycisku i zaktualizować plik manualnie",
		"newest_version" => "Nowsza dostępna wersja:",

		"test_message" => "Wyślij wiadomość serwerowi",

		/**
		 * New in 1.5.2.2
		 */
		
		"find_more" => "Dowiedz się więcej!",

		/**
		 * New in 1.5.3
		 */
		
		"duplicate" => "Sklonuj",
		"other" => "Inne",
		"someone_else" => "Ale wciąż może kupić to dla kogoś innego",

		/**
		 * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
		 */
		
		"here" => "tutaj", // This is $1 in 'job_already_created' because it's wrapped in a link
		"job_already_created" => "Już utworzyłeś pracę niestandardową. Jeżeli chcesz przejść do zakupu kliknij $1. W innym przypadku możesz utworzyć nową",
		
		"general_info" => "Informacje ogólne",
		"preferences" => "Preferencje",

		"job_name" => "Nazwa pracy",
		"chat_cmd" => "Komenda, aby dołączyć do pracy",
		"job_desc" => "Opis pracy",
		"job_colour" => "Kolor pracy",

		"weapons" => "Bronie",
		"models" => "Modele",
		"model" => "Model",
		
		"job_costs" => "Kosztuje $1 albo $2 kredytów",

		"friends" => "Znajomi",
		"friends_max" => "<h6>Znajomi - $1 maksymalnie</h6>",
		"friends_add" => "Za każdego znajomego, którego dodasz otrzymasz $1 albo $2 kredytów do ceny finalnej",
		"friends_not" => "Nie masz uprawnień, aby dodać znajomego do tego pakietu",

		"salary" => "Wynagrodzenie",
		"salary_static" => "Twoje wynagrodzenie będzie wynosić $1",
		"salary_base" => "Podstawowe wynagrodzenie wynosi $1. Za każdą podniesioną liczbe otrzymasz $2 albo $3 kredytów do ceny finalnej",
		"salary_max" => "<h6>Wynagrodzenie - $1 maksymalnie razy</h6>",
		"salary_current" => "Twoje obecne wynagrodzenie: $1",

		"license" => "Licencja",
		"license_included" => "Otrzymujesz licencje zawartą w tej pracy",
		"license_include" => "Licencja zawarta - Kosztuje $1 lub $2 kredytów",
		"license_no" => "Nie otrzymujesz licencji",

		"payment_confirmation" => "Potwierdzenie płatności",
		"job_total" => "Twój aktualny stan to $1 albo $2 kredytów",
		"job_proceed" => "Przejdź do płatności",

		/**
		 * New in 1.5.5
		 */
		
		"job_total_nocredits" => "Stan wynosi $1",
		"job_total_onlycredits" => "Stan wynosi $1 kredytów",
		
		"earned_total" => "W SUMIE ZAROBIONE",
		"earned_week" => "ZAROBIONE W TYM TYGODNIU",
		"earned_month" => "ZAROBIONE W TYM MIESIĄCU",

		"real_transaction" => "Licz jako normalna transakcja",
		"not_real_transaction" => "Nie licz jak normalna transakcja (nie doda pieniędzy do historii konta)",

		/**
		 * New in 1.6
		 */

		"active_everyone" => "Ustaw jako aktywne dla wszystkich",
		"buy_others_disabled" => "Kupowanie pakietów dla innych jest obecnie wyłączone!",
		"job_skip_prize" => "Pomiń - Kliknij tutaj aby odrzucić nagrodę",

		"move_packages" => "Przytrzymaj $1, aby poruszać pakietami",

		"add" => "Dodaj",
		"edit" => "Edytuj",

		// Theme
		"theme" => "Styl",
		"danger_theme" => "Nie usuwaj tego stylu, jeżeli obecnie na nim nie pracujesz!",
		"sure_theme" => "Jesteś pewien, że chcesz usunąć ten styl?",
		"theme_name" => "Nazwa stylu",
		
		"edit_theme" => "Edytuj styl",
		"add_theme" => "Dodaj styl",
		"select_theme" => "Wybierz styl",

		// Imprint page
		"imprint" => "Wizytówka",
		"enable_imprint" => "Włącz wizytówkę",
		"company_name" => "Nazwa firmy",
		"street_address" => "Adres",
		"post_address" => "Adres pocztowy",
		"country" => "Kraj",
		"trade_register" => "Zarejestrowanie firmy",
		"company_id" => "ID firmy",
		"company_ceo" => "CEO",
		"contact_email" => "Mail kontaktowy",
		"contact_phone" => "Telefon kontaktowy",

		/**
		 * New in 1.6.1
		 */
		"game" => "Gra",
		"server_ip" => "IP serwera",
		"server_port" => "Port serwera",
		"server_rcon" => "Hasło RCon",

		"edit_raffle" => "Edytuj loterie",
		"add_raffle" => "Dodaj loterie",
		"select_raffle" => "Wybierz loterię:",

		"package_cantbuy" => "Nie możesz kupić tego pakietu bez posiadania: $1",
		"package_they_cantbuy" => "Nie mogą kupić tego pakietu bez posiadania: $1",

		"hide" => "Jeżeli nie posiadasz żadnego z tych pakietów, nie możesz również kupić tego",
		"hide_text" => "Jeżeli nie posiadasz żadnego z pakietów podanych poniżej, nie możesz zakupić również tego",

		"your_spendings" => "Twoje wydatki w ciągu ostatnich 5 miesięcy",
		"spendings_currency" => "Twoje wydatki są obecnie pokazywane w głównej walucie sklepu [$1]. Ten wykres porównuje wydane kredyty z wydanymi pieniędzmi. Również kredyty są powiązane z pieniędzmi. (Kredyty = <font color='#9c9c9c'><b>Szary</b></font>, Pieniądze = <font color='#c10000'><b>Czerwony</b></font>)",
	
		"spent_total" => "OGÓLNE WYDATKI",
		"spent_week" => "WYDATKI W TYM TYGODNIU",
		"spent_month" => "WYDATKI W TYM MIESIĄCIU",

		/**
		 * New in 1.6.1.5
		 */
		"advent_calendar" => "Kalendarz adwentowy",
		"advent" => "Adwent",
		"day" => "Dzień",
		"advent_opened" => "Otworzyłeś w dniu $1 i otrzymałeś $2!",
		"advent_nopkg" => "Ten dzień nie ma pakietów przypisanych do niego, skontaktuj się z administratorem i z nim o tym porozmawiaj",
		"advent_text" => "Zdobądź jeden darmowy pakiet każdego dnia od 1 grudnia do świąt, czyli 24 grudnia!",

		/**
		 * New in 1.6.2
		 */
		"coupons" => "Kupony",
		"add_cou" => "Dodaj kupon",
		"edit_cou" => "Edytuj kupon",
		"select_cou" => "Wybierz kupon",
		"sure_cou" => "Jesteś pewien, że chcesz usunąć ten kupon?",
		"coupon_text" => "Jeżeli masz kupon, możesz aktywować go tutaj.",

	);

	$curfile = __FILE__;
	if($curfile == 'pl.php'){
		$english_lang = $lang;
	}

?>
