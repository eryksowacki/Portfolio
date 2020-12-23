package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner kategoriaWagiJeden = new Scanner(System.in);
        System.out.println("Podaj ilość ocen wagi 1: ");
        double iloscOcen = kategoriaWagiJeden.nextDouble();

            double sumaKatJeden = 0;
            double sredniaKatJeden = 0;

        for (double i=0; i<iloscOcen; i++){
            Scanner ocena = new Scanner(System.in);
            System.out.println("Podaj ocenę");
            double j = ocena.nextDouble();

                sumaKatJeden += j;
                sredniaKatJeden = sumaKatJeden / iloscOcen;
        }


        Scanner kategoriaWagiDwa = new Scanner(System.in);
        System.out.println("Podaj ilość ocen wagi 2");
        double iloscOcenWagDwa = kategoriaWagiDwa.nextDouble();

            double sumaKatDwa = 0;
            double sredniaKatDwa = 0;

        for (double i=0; i<iloscOcenWagDwa; i++){
            Scanner ocena = new Scanner(System.in);
            System.out.println("Podaj ocenę");
            double j = ocena.nextDouble();

                sumaKatDwa += j * 2;
                sredniaKatDwa = sumaKatDwa / (iloscOcenWagDwa * 2);
        }


        Scanner kategoriaWagiTrzy = new Scanner(System.in);
        System.out.println("Podaj ilość ocen wagi 3");
        double iloscOcenWagTrzy = kategoriaWagiTrzy.nextDouble();

            double sumaKatTrzy = 0;
            double sredniaKatTrzy = 0;

        for (double i=0; i<iloscOcenWagTrzy; i++){
            Scanner ocena = new Scanner(System.in);
            System.out.println("Podaj ocenę");
            double j = ocena.nextDouble();

                sumaKatTrzy += j * 3;
                sredniaKatTrzy = sumaKatTrzy / (iloscOcenWagTrzy * 3);
        }

        double srednia = (sumaKatJeden + sumaKatDwa + sumaKatTrzy) / (iloscOcen + (iloscOcenWagDwa * 2) + (iloscOcenWagTrzy * 3));
            System.out.println("Srednia jest rowna: " + srednia);
    }
}