<?php

interface AlbotelematicoHelperInterface
{
    /*
     * Chiamata dal sourcehandler carica argomenti e opzioni nell'helper
     */
    function loadArguments( $arguments, $options );

    /*
     * Restituisce il valore dell'argomento passato o un'eccezione
     */
    function getArgument( $name );

    /*
     * Carica i valori da remoto
     */
    function loadData();

    /*
     * Restituisce i dati caricati
     */
    function getData();

    /*
     * Restituisce il numero di dati caricati
     */
    function getDataCount();

    /*
     * Imposta la riga corrente
     */
    function setCurrentRow( $row );

    /*
     * Filtra la riga. Se ritorna false la riga NON viene processata
     */
    function filterRow();

    /*
     * Ricava le collocazioni
     */
    function getLocations();

    /*
     * Ricava la classe
     */
    function getClassIdentifier();

    /*
     * Valida gli argomenti in base all'array resitituito da availableArguments
     */
    function validateArguments();

    /*
     * Restituisce un array associativo (string) nome_argomento => (bool) isRequired
     */
    function availableArguments();

    /*
     * restituisce i valori di row normalizzati per ez (attributi, path, ...)
     */
    function prepareValues();

    /*
     * popola l'oggetto
     */
    function fillContent( SQLIContent $content );

    /*
     * torna indietro se sbaglia qualcosa
     */
    function rollback();

}