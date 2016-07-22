<?php  
function loadContacts()
{
    $content = trim(file_get_contents('contacts.txt'));
    $lines = explode("\n", $content);
    $contacts = [];
    foreach ($lines as $line) {
        $contact = explode('|', $line);
        addContact($contacts, $contact[0], $contact[1]);
    }
    return $contacts;
}
function addContact(&$contacts, $name, $number)
{
    $contacts[] = [
        'name' => $name,
        'number' => $number,
    ];
}
function saveContacts($contacts)
{
    $content = '';
    foreach ($contacts as $contact) {
        $content .= implode('|', $contact) . "\n";
    }
    file_put_contents('contacts.txt', $content);
}
function viewContacts($contacts)
{
    $contactsTable = formatContacts($contacts);
    alert($contactsTable);
}

function newContact(&$contacts)
{
    $name = inputName('Enter a new contact name:');
    $number = inputNumber('Enter phone number');
    $matches = searchContact($contacts, $name);
    if (count($matches) > 0) {
        $message = "There's already a contact named $name. Do you want to overwrite it? (y/n)";
        if (confirm($message)) {
            deleteContacts($contacts, $name);
        } else {
            newContact($contacts);
        }
    }
    addContact($contacts, $name, $number);
    alert('Contact saved successfully!');
}

?>