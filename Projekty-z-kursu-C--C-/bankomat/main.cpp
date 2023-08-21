#include <iostream>

using namespace std;
int PIN;

int main()
{
    cout << "Witaj w naszym banku!" << endl;
    cout << "Podaj numer PIN: ";
    cin>>PIN;

    if(PIN=="1729")
    {
        cout<<"Poprawny PIN";
    }
    else
    {
        cout<<"Niepoprawny PIN";
    }
    return 0;
}
