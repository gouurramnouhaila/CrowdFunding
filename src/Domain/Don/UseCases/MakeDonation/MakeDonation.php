<?php


namespace App\Domain\Don\UseCase;


class MakeDonation
{
    /**
     * @param MakeDonationRequest $donationRequest
     * @return MakeDonationResponse
     */
    public function execute(MakeDonationRequest $donationRequest,MakeDonationPresenterInterface $presenter): MakeDonationResponse {

        return new MakeDonationResponse([
            100,
            200,
            199
        ]);
    }
}